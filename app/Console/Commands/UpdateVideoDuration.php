<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class UpdateVideoDuration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'video:update-duration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update custom property duration pada media video';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Media::where('collection_name', 'library')
            ->where('mime_type', 'like', 'video/%')
            ->get()
            ->each(function ($media) {
                if (!$media->hasCustomProperty('duration')) {
                    try {
                        $duration = FFMpeg::fromDisk($media->disk)
                            ->open($media->getPathRelativeToRoot())
                            ->getDurationInSeconds();

                        $media->setCustomProperty('duration', (int) $duration);
                        $media->save();

                        $this->info("Berhasil update ID {$media->id}: {$duration} detik");
                    } catch (\Throwable $e) {
                        $this->error("Gagal memproses ID {$media->id}: " . $e->getMessage());
                    }
                }
            });
    }
}
