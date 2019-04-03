
 <div class="row mt-4">
		<div class="col-md-12 col-sm-12  col-xs-12 col-lg-12">
        
            <!-- Fluid width widget -->        
    	    <div class="card">
                <div class="card-header card-title text-white h5 bg-primary">
                    <i class="far fa-comments"></i>   
                        Recent Comments
                </div>
                <div class="card-body">
                    <ul class="media-list">
                        @foreach($comments as $comment)
                        <li class="media" style="border-bottom:1px dashed #efefef;margin-bottom:25px;">
                            <a href="#" class="pull-left">
                                <img style="width:64px;height:64px;border:2px solid #e5e7e8;"
                                     src="https://bootdey.com/img/Content/user_1.jpg" alt=""
                                     class="rounded-circle mr-3">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted">{{ $comment->created_at}}</small>
                                </span><br>
                                <strong class="text-success">@ {{ $comment->user->name}}</strong><br>
                                <span>
                                    {{ $comment->body }}
                                </span><br>
                                <span class="text-danger">
                                    <a href="#">{{ $comment->url }}</a>
                                </span>
                            </div>
                        </li>
                        @endforeach

                    </ul>

                </div>
            </div>
            <!-- End fluid width widget --> 
            
		</div>
	</div>


