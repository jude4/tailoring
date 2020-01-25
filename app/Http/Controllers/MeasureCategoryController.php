<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMeasureCategoryRequest;
use App\Http\Requests\UpdateMeasureCategoryRequest;
use App\Repositories\MeasureCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MeasureCategoryController extends AppBaseController
{
    /** @var  MeasureCategoryRepository */
    private $measureCategoryRepository;

    public function __construct(MeasureCategoryRepository $measureCategoryRepo)
    {
        $this->measureCategoryRepository = $measureCategoryRepo;
    }

    /**
     * Display a listing of the MeasureCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $measureCategories = $this->measureCategoryRepository->all();

        return view('measure_categories.index')
            ->with('measureCategories', $measureCategories);
    }

    /**
     * Show the form for creating a new MeasureCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('measure_categories.create');
    }

    /**
     * Store a newly created MeasureCategory in storage.
     *
     * @param CreateMeasureCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateMeasureCategoryRequest $request)
    {
        $input = $request->all();

        $measureCategory = $this->measureCategoryRepository->create($input);

        Flash::success('Measure Category saved successfully.');

        return redirect(route('measureCategories.index'));
    }

    /**
     * Display the specified MeasureCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $measureCategory = $this->measureCategoryRepository->find($id);

        if (empty($measureCategory)) {
            Flash::error('Measure Category not found');

            return redirect(route('measureCategories.index'));
        }

        return view('measure_categories.show')->with('measureCategory', $measureCategory);
    }

    /**
     * Show the form for editing the specified MeasureCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $measureCategory = $this->measureCategoryRepository->find($id);

        if (empty($measureCategory)) {
            Flash::error('Measure Category not found');

            return redirect(route('measureCategories.index'));
        }

        return view('measure_categories.edit')->with('measureCategory', $measureCategory);
    }

    /**
     * Update the specified MeasureCategory in storage.
     *
     * @param int $id
     * @param UpdateMeasureCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMeasureCategoryRequest $request)
    {
        $measureCategory = $this->measureCategoryRepository->find($id);

        if (empty($measureCategory)) {
            Flash::error('Measure Category not found');

            return redirect(route('measureCategories.index'));
        }

        $measureCategory = $this->measureCategoryRepository->update($request->all(), $id);

        Flash::success('Measure Category updated successfully.');

        return redirect(route('measureCategories.index'));
    }

    /**
     * Remove the specified MeasureCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $measureCategory = $this->measureCategoryRepository->find($id);

        if (empty($measureCategory)) {
            Flash::error('Measure Category not found');

            return redirect(route('measureCategories.index'));
        }

        $this->measureCategoryRepository->delete($id);

        Flash::success('Measure Category deleted successfully.');

        return redirect(route('measureCategories.index'));
    }
}
