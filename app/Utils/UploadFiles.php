<?php

namespace App\Utils;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class UploadFiles
{
    public static function upload(string $path, UploadedFile $file, ?string $filename = null)
    {
        if ($path == sys_get_temp_dir()) {
            $full_path = $path;
        } else {
            $full_path = app()->basePath('public' . DIRECTORY_SEPARATOR . $path);
        }
        if (!file_exists($full_path)) {
            if (!mkdir($full_path, 0777, true) && !is_dir($full_path)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $full_path));
            }
        }
        if ($file != null) {
            if ($filename != null) {
                $file_name = $filename;
            } else {
                $file_name = implode('.', explode('.', $file->getClientOriginalName(), -1));
                $file_name = time() . '.' . str_replace([' ', '.'], '_', $file_name) . '.' . $file->extension();
            }
            if ($file->move($path, $file_name)) {
                return $path . DIRECTORY_SEPARATOR . $file_name;
            }
        }
        return null;
    }

    public static function delete(string $path, $filename)
    {
        if ($filename == null) {
            return null;
        }
        $file = app()->basePath('public' . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . $filename);
        if (file_exists($file)) {
            unlink($file);
        }
        return null;
    }
}
