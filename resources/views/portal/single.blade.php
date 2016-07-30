@extends('portal.master')
@section('content')
			<div class="movie-main-content">		
				<div class="col-md-9 total-news">
					
	<div class="grids">
		<div class="msingle-grid box">
			<div class="grid-header">
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod . </h3>
				<ul>
				<li><span>Post By Admin on sunday,March 05,2013 width</span></li>
				<li><a href="#">5 comments</a></li>
				</ul>
			</div>
			<div class="singlepage">
							<a href="#"><img src="images/m1.jpg" /></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium perspiciatis unde omnis iste natus error sit voluptatem accusantiumdoloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<a href="#">...</a></p>
							<div class="clearfix"> </div>
						</div>
						<div class="single">
							<h3>Lorem Ipsum IS A TENSE, TAUT, COMPELLING THRILLER</h3>
							<p>STORY:<i> Meera and Arjun drive down Lorem Ipsum - can they survive a highway from hell?</i></p>
						</div>
							<div class="best-review">
								<h4>Best Reader's Review</h4>
								<p>Excellent Movie and great performance by Lorem, one of the finest thriller of recent  like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<p><span>Neeraj Upadhyay (Noida)</span> 16/03/2015 at 12:14 PM</p>
							</div>
							<div class="story-review">
								<h4>REVIEW:</h4>
								<p>So,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
		</div>
	
			<div class="clearfix"> </div>
	</div>
	
	<ul class="comment-list">
		  		   <h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>
		  		   <li><img src="images/avatar.png" class="img-responsive" alt="">
		  		   <div class="desc">
		  		   <p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
		  		   </div>
		  		   <div class="clearfix"></div>
		  		   </li>
		  	  </ul>
				 <div class="content-form">
					 <h3>Leave a comment</h3>
					<form>
						<input type="text" placeholder="Name" required/>
						<input type="text" placeholder="Email" required/>
						<input type="text" placeholder="Phone" required/>
						<textarea placeholder="Message"></textarea>
						<input type="submit" value="SEND"/>
				   </form>
						 </div>
			</div>	
		@include('portal.sidebar')
			</div>
@endsection