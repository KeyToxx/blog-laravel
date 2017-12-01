<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
		@for($i=1; $i < count($articles); $i++)
			{{"Article : ".$articles[0]->title}}
		@endfor
		</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/liste.css')}}">
	</head>
	<body>
		@extends('blog.menu')
		<section class="container-fluid">
			@foreach($articles as $article)
				<?php echo '<div class="articles article-'.$article->id_article.'">'; ?>
					<div class="row">

						<div class="titre col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
							<p>{{$article->title}}</p>
						</div>

						<div class="description col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
							<p>{{$article->description}}</p>
							<p>{{$article->author}}</p>
						</div>

					</div>
				<?php echo "</div>"?>
			@endforeach
		</section>
	</body>
</html>