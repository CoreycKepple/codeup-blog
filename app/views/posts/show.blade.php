@extends('layouts.master')

@section('content')
<div class='row'>
        <div class='col-sm-1'>
               <a href="{{{ action('PostsController@index') }}}#disqus_thread" style='color:#FFF;'><button type='button' class='btn btn-primary' title='View List of All Posts'><span class='glyphicon glyphicon-list-alt'></span></button></a>
        </div>
</div>
    <div class="row">    
    	<div class="col-sm-8">
            <div class='page-header'>
                <h3>{{{ $post->title }}}</h3>
                <p class='text-muted'>Posted on: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y') }}} </p>
            </div>    
            <p class='small text-muted'>Written By: {{{$post->user->email}}} </p>    
            <p> {{ $post->body }} </p>
        </div>
        @if (!is_null($post->image_path))  
        <div class='col-sm-3' style='margin-top:130px; margin-left:40px;'>
            <img src='{{{ $post->image_path }}}' class='img-responsive'>
        </div>
        @endif
    </div>
    <div class='row'>
        <div class="col-sm-12">   
            <div class="page-header">
               <a href="{{{ action('PostsController@create') }}}"><button style="display:inline" class="btn btn-success" type="submit" value="submit" title='Create New Post'><span class='glyphicon glyphicon-pencil' style='color:#FFF;'></span></button></a> &mdash; <a href="{{{ action('PostsController@edit', $post->id) }}}"><button style="display:inline" class="btn btn-warning" title='Edit Current Post'><span class='glyphicon glyphicon-edit' style='color:#FFF;'></span> </button></a> &mdash; <a href="#" id='btnDelete'><button style="display:inline" class="btn btn-danger" title='Delete Post'><span class='glyphicon glyphicon-trash' style='color:#FFF;'></span> </button></a>
            </div> 
        </div>
</div>
<div id="disqus_thread" style='width:600px;' class='center-block'></div>
 <script type="text/javascript">
     /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
     var disqus_shortname = 'cckblogproj'; // required: replace example with your forum shortname

     /* * * DON'T EDIT BELOW THIS LINE * * */
     (function() {
         var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
         dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
         (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
     })();
 </script>
 <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
 <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
</div>
    {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
    {{ Form::close() }}

    
<!-- This is creates the delete confirm modal -->
<script>
    $('#btnDelete').on('click', function (e) {
        e.preventDefault();
        bootbox.confirm('Are you sure you want to delete this post?', function(result) {
            if (result) {
                $('#formDelete').submit();
            };
        });
    });
</script>

<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'cckblogproj'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>


@stop