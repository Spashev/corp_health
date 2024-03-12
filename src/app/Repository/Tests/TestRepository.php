<?php

declare(strict_types=1);

namespace App\Repository\Tests;

use App\Models\Test\Question;
use App\Models\Test\QuestionAnswer;
use App\Models\Test\Result;
use App\Models\Test\Test;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestRepository implements TestRepositoryInterface
{
    public function getTests(): LengthAwarePaginator
    {
        return Test::query()->paginate(10);
    }

    public function get(int $id): Model|Collection|Builder|array|null
    {
        return Test::query()->with('questions.answers')->findOrFail($id);
    }

    public function create(Request $request): Model|Builder
    {
        return DB::transaction(static function () use ($request) {
            $lang = $request->get('locale');
            $test = Test::query()->create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'category_id' => $request->get('category_id'),
                'is_active' => $request->get('is_active') ?? true,
                'locale' => $lang,
            ]);
    
            foreach ($request->get('questions') as $questionData) {
                $question = $test->questions()->create([
                    'title' => $questionData['title'],
                    'locale' => $lang,
                ]);
    
                foreach ($questionData['answers'] as $answerData) {
                    $question->answers()->create([
                        'answer' => $answerData['answer'],
                        'ball' => $answerData['ball'],
                        'locale' => $lang,
                    ]);
                }
            }
    
            foreach ($request->get('results') as $result) {
                $test->results()->create([
                    'description' => $result['description'], 
                    'ball' => $result['ball'],
                    'locale' => $lang,
                ]);
            }
    
            return $test;
        });
    }

    public function update(int $id, Request $request): Model|Collection|Builder|array|null
    {
        return DB::transaction(static function () use ($request, $id) {
            $test = Test::query()->findOrFail($id);
    
            $testData = collect($request->only(['title', 'description', 'category_id', 'is_active']))
                ->filter()
                ->toArray();
    
            $test->update($testData);

            if ($request->has('questions')) {
                foreach ($request->get('questions') as $questionData) {
                    $question = Question::query()->updateOrCreate(
                        ['id' => $questionData['id']],
                        collect($questionData)->except('answers')->toArray()
                    );

                    if ($request->has('answers')) {
                        $answers = [];
                        foreach ($questionData['answers'] as $answerData) {
                            $answers[] = QuestionAnswer::updateOrCreate(
                                ['id' => $answerData['id']],
                                ['answer' => $answerData['answer'], 'ball' => $answerData['ball']]
                            );
                        }
                        $question->answers()->saveMany($answers);
                    }
                    $test->questions()->save($question);
                }
            }

            if ($request->has('results')) {
                foreach ($request->get('results') as $result) {
                    Result::query()->updateOrCreate(
                        ['id' => $result['id']],
                        ['description' => $result['description'], 'ball' => $result['ball'], 'test_id' => $test->id]
                    );
                }
            }
    
            return $test;
        });
    }
}