<?php

namespace App\Http\Controllers;

use App\Utils\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UploaderController extends Controller
{
    public const TYPES = array(
        'books.image' => 'uploads'.DIRECTORY_SEPARATOR.'books'.DIRECTORY_SEPARATOR.'images',
        'books.file' => 'uploads'.DIRECTORY_SEPARATOR.'books'.DIRECTORY_SEPARATOR.'files',
        'rua_files.image' => 'uploads'.DIRECTORY_SEPARATOR.'rua_files'.DIRECTORY_SEPARATOR.'images',
        'rua_files.file' => 'uploads'.DIRECTORY_SEPARATOR.'rua_files'.DIRECTORY_SEPARATOR.'files',
        'courses.image' => 'uploads'.DIRECTORY_SEPARATOR.'courses'.DIRECTORY_SEPARATOR.'images',
        'courses.attachments' => 'uploads'.DIRECTORY_SEPARATOR.'courses'.DIRECTORY_SEPARATOR.'attachments',
        'courses.categories' => 'uploads'.DIRECTORY_SEPARATOR.'courses'.DIRECTORY_SEPARATOR.'categories',
        'teachers' => 'uploads'.DIRECTORY_SEPARATOR.'teachers',
        'users' => 'uploads'.DIRECTORY_SEPARATOR.'users',

    );
    public function upload(Request $request, string $type){
        $validator = Validator::make($request->all(), [
            'image' => ['required', 'image', 'mimes:png,jpg,jpeg,gif'],
        ]);
        if($validator->fails()){
            return ['errors' => $validator->getMessageBag()];
        }
        $this->validator($type);

        $file = UploadFiles::upload(self::TYPES[$type], $request->file('image'));
        return ['status' => $file];
    }
    public function delete(Request $request, string $type){
        $this->validator($type);
        $validator = Validator::make($request->all(), [
            'filename' => ['required', 'string', function ($name, $value, $fail) use ($type) {
                if(!file_exists(self::TYPES[$type] . DIRECTORY_SEPARATOR . $value)){
                    $fail("File with name ($value) not exists.");
                }
            }],
        ]);
        if($validator->fails()){
            return ['errors' => $validator->getMessageBag()];
        }
        UploadFiles::delete(self::TYPES[$type], $request->input('filename'));
        return $request->input('filename');
    }

    private function validator($type){
        if(!isset(self::TYPES[$type])){
            abort(404);
        }
    }
}
