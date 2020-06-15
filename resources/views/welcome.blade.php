@extends('layouts.menu')
@section('content')
<div>
                <div class="panel panel-primary">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-list"><b> Lists Des Absences</b></span>
						<div class="pull-right action-buttons">
							<div class="btn-group pull-right">
								<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-cog" style="margin-right: 0px;"></span>
								</button>
								<ul class="dropdown-menu slidedown">
									<li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span>Edit</a></li>
									<li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-trash"></span>Delete</a></li>
									<li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-flag"></span>Flag</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label for="checkbox">
										List 1
									</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox">
									<label for="checkbox2">
										List 2
									</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox">
									<label for="checkbox3">
										List 3
									</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox">
									<label for="checkbox4">
										List 4
									</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox">
									<label for="checkbox5">
										List 5
									</label>
								</div>
								<div class="pull-right action-buttons">
									<a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-pencil"></span></a>
									<a href="http://www.jquery2dotnet.com" class="trash"><span class="glyphicon glyphicon-trash"></span></a>
								</div>
							</li>
						</ul>
					</div>
					
            	</div>
            </div>
@endsection