<?php

namespace App\Http\Controllers\Api;

use App\Tickets;
use App\TicketsComment;
use App\Http\Requests\Api\CreateTicketsComment;
use App\Http\Requests\Api\DeleteTicketsComment;
use App\Icon\Transformers\TicketsCommentTransformer;

class TicketsCommentController extends ApiController
{
    /**
     * TicketsComment constructor.
     *
     * @param TicketsCommentTransformer $transformer
     */
    public function __construct(TicketsCommentTransformer $transformer)
    {
        $this->transformer = $transformer;

        $this->middleware('auth.api')->except('index');
        $this->middleware('auth.api:optional')->only('index');
    }

    /**
     * Get all the comments of the ticket given by its slug.
     *
     * @param Tickets $tickets
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Tickets $tickets)
    {
        $comments = $tickets->comments()->get();

        return $this->respondWithTransformer($comments);
    }

    /**
     * Add a comment to the article given by its slug and return the comment if successful.
     *
     * @param CreateTicketsComment $request
     * @param Tickets $tickets
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateTicketsComment $request, Tickets $tickets)
    {
        $comment = $tickets->comments()->create([
            'comment_text' => $request->input('tickets_comment.comment_text'),
            'user_id' => auth()->id(),
        ]);

        return $this->respondWithTransformer($comment);
    }

    /**
     * Delete the comment given by its id.
     *
     * @param DeleteTicketsComment $request
     * @param $tickets
     * @param TicketsComment $comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(DeleteTicketsComment $request, $tickets, TicketsComment $comment)
    {
        $comment->delete();

        return $this->respondSuccess();
    }
}
