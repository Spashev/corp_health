<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\Test\StoreTestRequest;
use App\Http\Requests\Test\UpdateTestRequest;
use App\Http\Resources\Tests\GetTestResource;
use App\Http\Resources\Tests\GetTestsResource;
use App\Models\Test\Test;
use App\Services\TestService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class TestController extends Controller
{
    public function index(TestService $service): AnonymousResourceCollection
    {
        $tests = $service->getTests();

        return GetTestsResource::collection($tests);
    }

    public function store(StoreTestRequest $request, TestService $service): GetTestResource
    {
        $notes = $service->createTest($request);

        return GetTestResource::make($notes);
    }

    public function show(Request $request, int $id, TestService $service): GetTestResource
    {
        $test = $service->getTestById($id);

        return GetTestResource::make($test);
    }

    public function update(UpdateTestRequest $request, int $id, TestService $service): GetTestResource
    {
        $note = $service->updateTest($id, $request);

        return GetTestResource::make($note);
    }

    public function destroy(Test $test): Response
    {
        $test->delete();

        return response()->noContent();
    }
}
