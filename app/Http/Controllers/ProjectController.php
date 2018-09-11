<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use Illuminate\Support\Facades\Log;
use Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('portfolio')->withProjects($projects);
    }

    public function projectItem($project_id)
    {
        //
        
        $project = DB::table('projects')->where('id', $project_id)->first();
        return view('portitem')->withProject($project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ini_set('memory_limit','512M');
        //
        $this->validate($request, array(
                'title' => 'required|max:255'
        ));

        $project = new Project;
      
        $project->title = $request->title;
        $project->overview = $request->overview;
        $project->concept = $request->concept;
        $project->type = $request->type;
        $project->feature = $request->feature;

        $image = $request->file('webBgImage');
        $filename1 = time() . 'wbi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename1);
        Image::make($image)->save($location);

        $project->webBgImage = $filename1;
        
        $image = $request->file('mobileBgImage');
        $filename2 = time() . 'mbi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename2);
        Image::make($image)->save($location);
       
        $project->mobileBgImage = $filename2;

        $image = $request->file('mobileImage');
        $filename3 = time() . 'mi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename3);
        Image::make($image)->save($location);

        $project->mobileImage = $filename3;

        $image = $request->file('monitorImage');
        $filename4 = time() . 'moi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename4);
        Image::make($image)->save($location);

        $project->monitorImage = $filename4;

        $image = $request->file('conceptImage1');
        $filename5 = time() . 'ci1.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename5);
        Image::make($image)->save($location);

        $project->conceptImage1 = $filename5;

        $image = $request->file('conceptImage2');
        $filename6 = time() . 'ci2.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename6);
        Image::make($image)->save($location);

        $project->conceptImage2 = $filename6;

        $image = $request->file('conceptImage3');
        $filename7 = time() . 'ci3.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename7);
        Image::make($image)->save($location);

        $project->conceptImage3 = $filename7;

        $image = $request->file('conceptImage4');
        $filename8 = time() . 'ci4.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename8);
        Image::make($image)->save($location);

        $project->conceptImage4 = $filename8;

        $image = $request->file('featureImage');
        $filename9 = time() . 'fi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename9);
        Image::make($image)->save($location);
 
        $project->featureImage = $filename9;
                
        $project->save();




        // foreach ($request->overviewPhotos as $photo) {
        //     $filename = time() . '.' . $photo->getClientOriginalExtension();
        //     $location = public_path('images/projectoverview' . $filename);
        //     Image::make($photo)->save($location);

        //     ProjectsOverviewPhoto::create([
        //         'product_id' => $project->id,
        //         'filename' => $filename
        //     ]);
        // }

        // foreach ($request->conceptPhotos as $photo) {
        //     $filename = time() . '.' . $photo->getClientOriginalExtension();
        //     $location = public_path('images/projectconcepts' . $filename);
        //     Image::make($photo)->save($location);

        //     ProjectsOverviewPhoto::create([
        //         'product_id' => $project->id,
        //         'filename' => $filename
        //     ]);
        // }

        // foreach ($request->featPhotos as $photo) {
        //     $filename = time() . '.' . $photo->getClientOriginalExtension();
        //     $location = public_path('images/projectfeatures' . $filename);
        //     Image::make($photo)->save($location);

        //     ProjectsOverviewPhoto::create([
        //         'product_id' => $project->id,
        //         'filename' => $filename
        //     ]);
        // }
      
        
        return redirect()->route('projects.index');
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $project = Project::find($id);

        $project->title = $request->input('title');
        $project->type = $request->input('type');
        $project->overview = $request->input('overview');
        $project->concept = $request->input('concept');
        $project->feature = $request->input('feature');

        $image = $request->file('webBgImage');
        $filename1 = time() . 'wbi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename1);
        Image::make($image)->save($location);

        $project->webBgImage = $filename1;
        
        $image = $request->file('mobileBgImage');
        $filename2 = time() . 'mbi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename2);
        Image::make($image)->save($location);
       
        $project->mobileBgImage = $filename2;

        $image = $request->file('mobileImage');
        $filename3 = time() . 'mi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename3);
        Image::make($image)->save($location);

        $project->mobileImage = $filename3;

        $image = $request->file('monitorImage');
        $filename4 = time() . 'moi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename4);
        Image::make($image)->save($location);

        $project->monitorImage = $filename4;

        $image = $request->file('conceptImage1');
        $filename5 = time() . 'ci1.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename5);
        Image::make($image)->save($location);

        $project->conceptImage1 = $filename5;

        $image = $request->file('conceptImage2');
        $filename6 = time() . 'ci2.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename6);
        Image::make($image)->save($location);

        $project->conceptImage2 = $filename6;

        $image = $request->file('conceptImage3');
        $filename7 = time() . 'ci3.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename7);
        Image::make($image)->save($location);

        $project->conceptImage3 = $filename7;

        $image = $request->file('conceptImage4');
        $filename8 = time() . 'ci4.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename8);
        Image::make($image)->save($location);

        $project->conceptImage4 = $filename8;

        $image = $request->file('featureImage');
        $filename9 = time() . 'fi.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename9);
        Image::make($image)->save($location);
 
        $project->featureImage = $filename9;
                
        $project->save();

        return redirect()->route('projects.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function mindex()
    {
        $projects = Project::all();
        return view('mobile.mportfolio')->withProjects($projects);
    }

    public function mprojectItem($project_id)
    {
        $project = DB::table('projects')->where('id', $project_id)->first();
        return view('mobile.mportitem')->withProject($project);
    }
            
    public function editItem($project_id)
    {
        $project = DB::table('projects')->where('id', $project_id)->first();
        return view('admin/addproject')->with('project', $project);
    }
    public function deleteItem($project_id)
    {
        DB::table('projects')->where('id',$project_id)->delete();
        DB::statement("SET @count = 0;");
        DB::statement("UPDATE `projects` SET `projects`.`id` = @count:= @count + 1;");
        DB::statement("ALTER TABLE `projects` AUTO_INCREMENT = 1;");
        return redirect()->route('projects.index');
    }
}
