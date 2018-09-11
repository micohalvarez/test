<!doctype html>
<html>
   <head>
      <title>My Login Page</title>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
   </head>
   <body>
   <section class="cloudTabSection">
        <div class="container-fluid h-100">
        @if(isset($project))
         {{  Form::model($project,  ['route' => ['projects.update', $project->id], 'method' => 'PUT','files' => true]) }}
         {{ Form::label('title', 'Project Title:')}}
            {{ Form::text('title',null, array('class' => 'form-control')) }}

          {{ Form::label('type', 'Project Type:')}} 
            {{ Form::textarea('type',null, array('class' => 'form-control')) }} 
        
            {{ Form::label('overview', 'Project Overview:')}}
            {{ Form::textarea('overview',null, array('class' => 'form-control')) }}

            {{ Form::label('concept', 'Project Concept:')}}
            {{ Form::textarea('concept',null, array('class' => 'form-control')) }}

            {{ Form::label('feature', 'Project Feature:')}}        
            {{ Form::textarea('feature',null, array('class' => 'form-control')) }} 
            
            {{ Form::label('webBgImage','Web Image:')}}
            {{ Form::file('webBgImage')}}

            {{ Form::label('mobileBgImage','Mobile BG Image:')}}
             {{ Form::file('mobileBgImage')}}

            {{ Form::label('mobileImage','Mobile Image:')}}
            {{ Form::file('mobileImage')}}

            {{ Form::label('monitorImage','Monitor Image:')}}
            {{ Form::file('monitorImage')}}

            {{ Form::label('conceptImage1','Concept Image 1:')}}
            {{ Form::file('conceptImage1')}}

            {{ Form::label('conceptImage2','Concept Image 2:')}}
            {{ Form::file('conceptImage2')}}

            {{ Form::label('conceptImage3','Concept Image 3:')}}
            {{ Form::file('conceptImage3')}}

            {{ Form::label('conceptImage4','Concept Image 4:')}}
            {{ Form::file('conceptImage4')}}

            {{ Form::label('featureImage','Feature Image:')}}
            {{ Form::file('featureImage')}}
            
            {{ Form::submit('Update Project')}};
  
         {!! Form::close() !!}       
        @else
        {!! Form::open(array('route' => 'projects.store', 'files' => true)) !!}
            {{ Form::label('title', 'Project Title:')}}
            {{ Form::text('title',null, array('class' => 'form-control')) }}


          {{ Form::label('type', 'Project Type:')}} 
            {{ Form::textarea('type',null, array('class' => 'form-control')) }} 
        
            {{ Form::label('overview', 'Project Overview:')}}
            {{ Form::textarea('overview',null, array('class' => 'form-control')) }}

            {{ Form::label('concept', 'Project Concept:')}}
            {{ Form::textarea('concept',null, array('class' => 'form-control')) }}

             {{ Form::label('feature', 'Project Feature:')}}        
            {{ Form::textarea('feature',null, array('class' => 'form-control')) }} 
            
            {{ Form::label('webBgImage','Web Image:')}}
            {{ Form::file('webBgImage')}}

            {{ Form::label('mobileBgImage','Mobile BG Image:')}}
             {{ Form::file('mobileBgImage')}}

            {{ Form::label('mobileImage','Mobile Image:')}}
            {{ Form::file('mobileImage')}}

            {{ Form::label('monitorImage','Monitor Image:')}}
            {{ Form::file('monitorImage')}}

            {{ Form::label('conceptImage1','Concept Image 1:')}}
            {{ Form::file('conceptImage1')}}

            {{ Form::label('conceptImage2','Concept Image 2:')}}
            {{ Form::file('conceptImage2')}}

            {{ Form::label('conceptImage3','Concept Image 3:')}}
            {{ Form::file('conceptImage3')}}

            {{ Form::label('conceptImage4','Concept Image 4:')}}
            {{ Form::file('conceptImage4')}}

            {{ Form::label('featureImage','Feature Image:')}}
            {{ Form::file('featureImage')}}
            {{ Form::submit('Create Project')}}; 
         {!! Form::close() !!}
         @endif
     </div>
     </section>
    </body>
    </html>