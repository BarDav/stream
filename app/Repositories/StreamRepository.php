<?php
namespace App\Repositories;

use App\Events\StreamEvent;
use App\Stream;
use Illuminate\Support\Facades\Response;

class StreamRepository
{
    protected $stream;

    public function __construct(Stream $stream)
    {
        $this->stream = $stream;
    }

    public function getCurrentStream()
    {
        $stream = $this->stream->first();

        event(new StreamEvent($stream->streaming));
        return Response::json([
            'success' => true,
            'isStreaming' => $stream->streaming
        ]);

    }

    public function createAndStartNewStream($arrData)
    {
        $stream = $this->stream->first();
        $stream->update($arrData);

        event(new StreamEvent($stream->streaming));
        return Response::json([
            'success' => true,
            'isStreaming' => $stream->streaming
        ]);
    }
}