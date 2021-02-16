<?php

namespace App\Http\Controllers\Api;

use App\Tag;    
use App\Status;
use App\TicketsComment;
use App\Icon\Paginate\Paginate; 
use App\Icon\Filters\TicketsCommentFilter;
use App\Http\Requests\Api\CreateTicketsComment;
use App\Http\Requests\Api\UpdateTicketsComment;
use App\Http\Requests\Api\DeleteTicketsComment;
use App\Icon\Transformers\TicketsCommentTransformer;

class TicketsCommentController extends ApiController
{
    /**
     * TicketsCommentController constructor.
     *
     * @param TicketsCommentTransformer $transformer
     */
    public function __construct(TicketsCommentTransformer $transformer)
    {
        $this->transformer = $transformer;

        $this->middleware('auth.api')->except(['index', 'show']);
        $this->middleware('auth.api:optional')->only(['index', 'show']);
    }
    /**
     * Get all the ticket comment.
     *
     * @param TicketsCommentFilter $filter
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(TicketsCommentFilter $filter)
    {
        $comments = new Paginate(TicketsComment::loadRelations()->filter($filter));

        return $this->respondWithPagination($comments);
    }
    
     /**
     * Create a new ticket comment and return the ticket comment if successful.
     *
     * @param CreateTicketsComment $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateTicketsComment $request)
    {
        $user = auth()->user();

        $comment = $user->comments()->create([
            'comment_text' => $request->input('comment.name'),
            'user_id' => $request->input('comment.name'),
        ]);

        return $this->respondWithTransformer($comment);
    }
    /**
         * Get the comment given by its slug.
         *
         * @param TicketsComment $comment
         * @return \Illuminate\Http\JsonResponse
         */
        public function show(TicketsComment $comment)
        {
            return $this->respondWithTransformer($comment);
        }

        /**
     * Update the ticket comment given by its slug and return the ticket comment if successful.
     *
     * @param UpdateTicketsComment $request
     * @param TicketsComment $comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTicketsComment $request, TicketsComment $comment)
    {
        if ($request->has('comment')) {
            $comment->update($request->get('comment'));
        }

        return $this->respondWithTransformer($comment);
    }

    /**
     * Delete the ticket comment given by its slug.
     *
     * @param DeleteTicketsComment $request
     * @param TicketsComment $comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(DeleteTicketsComment $request, TicketsComment $comment)
    {
        $comment->delete();

        return $this->respondSuccess();
    }
}
