<?php
namespace App\Http\Controllers;

use App\Repositories\StreamRepository;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    protected $repository;

    public function __construct(StreamRepository $streamRepository)
    {
        $this->repository = $streamRepository;
    }

    public function getCurrentStream()
    {
        return $this->repository->getCurrentStream();
    }
    public function enableStreaming(Request $request)
    {
        return $this->repository->createAndStartNewStream($request->all());
    }
}