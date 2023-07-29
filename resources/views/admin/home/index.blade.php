@extends('admin.master')

@section('title', 'Dashboard')

@section('body')
@if(!empty($profile))
 <!--Profile part starr-->
<section class="mt-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12  mx-auto">
				<div class="heading"><h3 class="text-center">CURRICULUM VITAE OF</h3></div>
				<div class="content_part">
					<div class="card  border-primary info">
						<div class="card-header border-primary card_title">{{$profile->name}}</div>
						<ul class="list-group list-group-flush">
							@foreach ($contacts as $contact)
							<li class="list-group-item">
								<div class="info_first">{{$contact->contact_title}}</div>
								<div class="info_scnd">{{$contact->contact_info}}</div>
							</li>
						   @endforeach
						  <li class="list-group-item">
							<div class="info_first">Present Address:</div>
							<div class="info_scnd">{{$profile->present_address}}</div>
						  </li>
						  <li class="list-group-item">
							<div class="info_first">Permanent Address:</div>
							<div class="info_scnd">{{$profile->permanent_address}}</div>
						  </li>
						</ul>
					  </div>
				</div>
				<div class="img_part">
					<img src="{{asset('/')}}{{$profile->image}}" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!--Profile part end-->

<!--Aspiration part start-->
<section class="mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto">
				<!-- common_heading start -->
				<div class="common_heading">
					<h3>Aspiration</h3>
				</div>
				<!-- common_heading end -->
				<div class="aspiration_content mt-2">
					<p>
						{{$profile->aspiration}}
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Aspiration part end-->

<!--Skills part start-->
@if(!empty($skill_categories))
<section class="mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto">
				 <!-- common_heading start -->
				 <div class="common_heading">
					<h3>Skill</h3>
				</div>
				<!-- common_heading end -->
				<div class="skill">
					<table class="table table-striped mt-3">
						@foreach ($skill_categories as $skill_category)
						<tr>
							<th class="py-5">{{$skill_category->category_name}}:</th>
							<td>
								<ul class="list-group list-group-numbered">
									@foreach ($skill_category->skillInfo as $skill)
									<li class="list-group-item">{{ $skill->skill }}</li>
									@endforeach
								</ul>
							</td>
						</tr>
						@endforeach
				   </table>
				</div>
			</div>
		</div>
	</div>
</section>
@endif
<!--Skills part end-->

<!--Certification psrt start-->
@if(!empty($certificates))
<section class="mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto">
				<!-- common_heading start -->
				<div class="common_heading">
					<h3>Certification</h3>
				</div>
				<!-- common_heading end -->
				<div class="certification_content mt-2">
					<table class="table table-striped mt-3">
						@foreach($certificates as $certificate)
						<tr>
							<th>
								{{ $loop->iteration }} . {{ $certificate->name}}
							</th>
							<td>
								{{ $certificate->description}}
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endif
<!--Certification psrt end-->

<!--Project part start-->
@if(!empty($projects))
<section class="mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto">
				<!-- common_heading start -->
				<div class="common_heading">
					<h3>Project Experience</h3>
				</div>
				<!-- common_heading end -->
				<div class="project_main mt-2">
					<div class="project_part mb-2">
						<table class="table table-striped mt-3" style="border-collapse: collapse">
							@foreach($projects as $project)
							<tr>
								<th colspan="2">{{ $loop->iteration }} . {{ $project->title }}</th>
								<td>
									<ul>
										<li>
											<p>{{ $project->description }}</p>
										</li>
										<li><b>Tools & Technologies:</b>{{ $project->tool_technology }}</li>
										<li><b>Link Is:</b>
											<a href="{{ $project->project_link }}">{{ $project->project_link }}
											</a>
										</li>
										<li>{{ $project->project_type }}</li>
									</ul>
								</td>
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endif
<!--Project part end-->

<!--Education part start-->
@if(!empty($educations))
<section class="mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto">
				<!-- common_heading start -->
				<div class="common_heading">
					<h3>Educational Qualification</h3>
				</div>
				<!-- common_heading end -->
				<div class="project_part mt-3">
					<table class="table table-striped">
						@foreach($educations as $education)
						<tr class="">
							<th>{{ $education->name }}</th>
							<td>
								<ul>
									<li><strong>Institute:</strong> {{ $education->i_name }} </li>
									<li><strong>Year:</strong> {{ $education->p_year }} </li>
									<li><strong>CGPA:</strong> {{ $education->gpa }} </li>
									@if($education->group)
									<li><strong>Group:</strong> {{ $education->group }} </li>
									@endif
									@if($education->board)
									<li><strong>Board:</strong>  {{ $education->board }} </li>
									@endif
								</ul>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endif
<!--Education part end-->

<!--Personal part start-->
@if(!empty($profile))
<section class="mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto">
				<!-- common_heading start -->
				<div class="common_heading">
					<h3>Personal Profile</h3>
				</div>
				<!-- common_heading end -->
				<div class="personal_part mt-3">
					<table class="table table-striped">
						<tr>
							<th>Name</th>
							<td>{{ $profile->name}}</td>
						</tr>
						@if($profile->nid_status == 1)
						<tr>
							<th>Nid No</th>
							<td>{{ $profile->nid}}</td>
						</tr>
						@endif
						<tr>
							<th>Father’s Name</th>
							<td>{{ $profile->father_name}}</td>
						</tr>
						<tr>
							<th>Mother’s Name</th>
							<td>{{ $profile->mother_name}}</td>
						</tr>
						<tr>
							<th>Date of Birth</th>
							<td>{{ date('d-M-Y',strtotime($profile->birht_date))}}</td>
						</tr>
						<tr>
							<th>Nationality</th>
							<td>{{ $profile->nationality}}</td>
						</tr>
						<tr>
							<th>Gander</th>
							<td>{{ $profile->gander}}</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endif
<!--Personal part end-->

<!--Extra-Curricular part start-->
@if(!empty($informations))
@foreach ($informations as $information)
	
	<section class="mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mx-auto">
					<!-- common_heading start -->
					<div class="common_heading">
						<h3>{{ $information->name }}</h3>
					</div>
					<!-- common_heading end -->
					<div class="curricular_part mx-2">
						<ul class="list-group list-group-numbered">
							<li class="list-group-item">{{ $information->description }}</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
@endforeach
@endif
<!--Extra-Curricular part end-->

@if(!empty($references))
<!--Reference part start-->
<section class="mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mx-auto">
				<!-- common_heading start -->
				<div class="common_heading">
					<h3>Reference</h3>
				</div>
				<!-- common_heading end -->
				@foreach($references as $reference)
				<div class="reference_1">
					<table class="table table-striped">
						<tr>
							<th>Name:</th>
							<td>{{ $reference->name }}</td>
						</tr>
						<tr>
							<th>Designation:</th>
							<td>{{ $reference->designation }}</td>
						</tr>
						<tr>
							<th>Email:</th>
							<td><a href="frontend-assets/mailto:"><b>{{ $reference->mail }}</b></a></td>
						</tr>
						<tr>
							<th>Phone:</th>
							<td><a href="frontend-assets/tel:">{{ $reference->mobile }}</a></td>
						</tr>
						<tr>
							<th>Institution:</th>
							<td>{{ $reference->institute }}</td>
						</tr>
						<tr>
							<th>Relation:</th>
							<td>{{ $reference->relation }}</td>
						</tr>
					</table>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endif
@else
<h1 class="text-center p-5 bg-warning mt-5">You haven't created any profile yet!!!</h1>
@endif
@endsection
