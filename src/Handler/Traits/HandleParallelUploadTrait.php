<?php

namespace Kladislav\LaravelChunkUpload\Handler\Traits;

use Kladislav\LaravelChunkUpload\Exceptions\ChunkSaveException;
use Kladislav\LaravelChunkUpload\Save\ParallelSave;
use Kladislav\LaravelChunkUpload\Storage\ChunkStorage;

trait HandleParallelUploadTrait
{
    protected $percentageDone = 0;

    /**
     * Returns the chunk save instance for saving.
     *
     * @param ChunkStorage $chunkStorage the chunk storage
     *
     * @return ParallelSave
     *
     * @throws ChunkSaveException
     */
    public function startSaving($chunkStorage)
    {
        // Build the parallel save
        return new ParallelSave(
            $this->file,
            $this,
            $chunkStorage,
            $this->config
        );
    }
}
