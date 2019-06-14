<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateAwardAPIRequest;
use App\Http\Requests\API\UpdateAwardAPIRequest;
use App\Models\Award;
use App\Repositories\AwardRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class AwardController
 * @package App\Http\Controllers\API
 */

class AwardAPIController extends AppBaseController
{
    /** @var  AwardRepository */
    private $awardRepository;

    public function __construct(AwardRepository $awardRepo)
    {
        $this->awardRepository = $awardRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/awards",
     *      summary="Get a listing of the Awards.",
     *      tags={"Award"},
     *      description="Get all Awards",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Award")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $awards = $this->awardRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($awards->toArray(), 'Awards retrieved successfully');
    }

    /**
     * @param CreateAwardAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/awards",
     *      summary="Store a newly created Award in storage",
     *      tags={"Award"},
     *      description="Store Award",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Award that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Award")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Award"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateAwardAPIRequest $request)
    {
        $input = $request->all();

        $award = $this->awardRepository->create($input);

        return $this->sendResponse($award->toArray(), 'Award saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/awards/{id}",
     *      summary="Display the specified Award",
     *      tags={"Award"},
     *      description="Get Award",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Award",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Award"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Award $award */
        $award = $this->awardRepository->find($id);

        if (empty($award)) {
            return $this->sendError('Award not found');
        }

        return $this->sendResponse($award->toArray(), 'Award retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateAwardAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/awards/{id}",
     *      summary="Update the specified Award in storage",
     *      tags={"Award"},
     *      description="Update Award",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Award",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Award that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Award")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Award"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateAwardAPIRequest $request)
    {
        $input = $request->all();

        /** @var Award $award */
        $award = $this->awardRepository->find($id);

        if (empty($award)) {
            return $this->sendError('Award not found');
        }

        $award = $this->awardRepository->update($input, $id);

        return $this->sendResponse($award->toArray(), 'Award updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/awards/{id}",
     *      summary="Remove the specified Award from storage",
     *      tags={"Award"},
     *      description="Delete Award",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Award",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Award $award */
        $award = $this->awardRepository->find($id);

        if (empty($award)) {
            return $this->sendError('Award not found');
        }

        $award->delete();

        return $this->sendResponse($id, 'Award deleted successfully');
    }
}
