<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use App\Models\Examination;
use App\Models\Question;
use App\Models\Reviewer;

class ReviewerController extends Controller
{

    function uploadAdminReviewer(Request $request)
    {
        $validation = [
            'id' => 'required',
            'reviewer' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,xls,xlsx|max:500',
        ];

        $validated = $request->validate($validation);


        if (!$validated) {
            return redirect('/admin/examinations');
        } else {

            if ($request->hasFile('reviewer')) {
                $file = $request->file('reviewer');
                $reviewer_name = uniqid() . '.' . $file->getClientOriginalExtension();

                $path = $file->store('reviewers', 'public');
                $path = str_replace('reviewers/', '', $path);


                $reviewer = new Reviewer;
                $reviewer->examination_id = $request->id;
                $reviewer->professor_id = session('administrator');
                $reviewer->file = $path;
                $reviewer->status = 1;
                $reviewer->save();

                return redirect()->back()->with('success', 'Reviewer has been uploaded to reviewer list!');
            } else {
                return redirect()->back()->withErrors([
                    'message' => 'Reviewer upload failed! Invalid reviewer file.',
                ]);
            }

        }
    }

    function uploadReviewer(Request $request)
    {
        $validation = [
            'id' => 'required',
            'reviewer' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,xls,xlsx|max:500',
        ];

        $validated = $request->validate($validation);


        if (!$validated) {
            return redirect('/faculty/examinations');
        } else {

            if ($request->hasFile('reviewer')) {
                $file = $request->file('reviewer');
                $reviewer_name = uniqid() . '.' . $file->getClientOriginalExtension();

                $path = $file->store('reviewers', 'public');
                $path = str_replace('reviewers/', '', $path);

                $reviewer = new Reviewer;
                $reviewer->examination_id = $request->id;
                $reviewer->professor_id = session('professor');
                $reviewer->file = $path;
                $reviewer->save();

                return redirect()->back()->with('success', 'Reviewer has been added to request list!');
            } else {
                return redirect()->back()->withErrors([
                    'message' => 'Reviewer request failed! Invalid reviewer file.',
                ]);
            }

        }
    }


    public function download($file)
    {
        $filePath = storage_path("app/public/reviewers/{$file}");

        if (Storage::disk('public')->exists("reviewers/{$file}")) {
            return response()->download($filePath, $file);
        } else {
            return abort(404, 'File not found');
        }
    }

    public function downloadReviewers($examination_id)
    {


        $reviewers = Reviewer::select(
            'reviewers.id',
            'reviewers.file',
        )

            ->where('reviewers.examination_id', '=', $examination_id)
            ->where('reviewers.status', '=', 1)
            ->get();

        if ($reviewers->count() == 0) {
            return redirect()->back()->withErrors([
                'message' => 'No available reviewer to download! Try again later!',
            ]);
        }

        $zip = new \ZipArchive();
        $zipFileName = 'reviewers.zip';
        $zipFilePath = storage_path("app/public/{$zipFileName}");

        if ($zip->open($zipFilePath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === true) {
            foreach ($reviewers as $reviewer) {
                $file = $reviewer->file;
                $filePath = storage_path("app/public/reviewers/{$file}");

                if (Storage::disk('public')->exists("reviewers/{$file}")) {
                    $zip->addFile($filePath, $file);
                } else {
                    // Handle the case where the file is not found for a reviewer
                    // You can choose to skip, log, or handle it as needed
                    // In this example, we'll just continue to the next iteration
                    continue;
                }
            }

            $zip->close();

            // Send the zip file as a response
            return response()->download($zipFilePath)->deleteFileAfterSend(true);
        } else {
            // Handle the case where the zip file could not be created
            return abort(500, 'Unable to create zip file');
        }
    }


    function addQuestion(Request $request)
    {
        $validation = [
            'examination_id' => 'required',
            'question' => 'required',
            'type' => 'required',
            'answer' => 'required',
        ];

        $isValidated = $request->validate($validation);
        if (!$isValidated)
            return redirect()->back()->withErrors([
                'message' => 'Question request failed! Invalid question details.',
            ]);

        $question = new Question;
        $question->examination_id = $request->examination_id;
        $question->question = $request->question;
        $question->type = $request->type;
        $question->choice_1 = $request->choice_a;
        $question->choice_2 = $request->choice_b;
        $question->choice_3 = $request->choice_c;
        $question->choice_4 = $request->choice_d;
        $question->answer = $request->answer;
        $question->choice_2 = $request->choice_b;
        $question->professor_id = session('administrator');

        $isSaved = $question->save();

        if (!$isSaved)
            return redirect()->back()->withErrors([
                'message' => 'Question request failed! Try again later!',
            ]);
        else
            return redirect()->back()->with('success', 'Question has been added to request list!');

    }

    function approveReviewer(Request $request)
    {
        $reviewer = Reviewer::where('id', $request->id)->first();
        $reviewer->status = 1;

        $isSaved = $reviewer->save();
        if (!$isSaved)
            return redirect()->back()->withErrors([
                'message' => 'Reviewer approve failed! Try again later!',
            ]);
        else
            return redirect()->back()->with('success', 'Reviewer has been approved!');
    }

    function rejectReviewer(Request $request)
    {
        $reviewer = Reviewer::where('id', $request->id)->first();
        $reviewer->status = 2;

        $isSaved = $reviewer->save();
        if (!$isSaved)
            return redirect()->back()->withErrors([
                'message' => 'Reviewer reject failed! Try again later!',
            ]);
        else
            return redirect()->back()->with('success', 'Reviewer has been rejected!');
    }

}