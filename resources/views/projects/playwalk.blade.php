@extends('layouts.app')

@section('navbar')
@parent
@endsection

@section('content')
<section class="hero is-medium has-text-centered">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				Playwalk Mobile Design
			</h1>
			<h2 class="subtitle">
				Playwalk
			</h2>
		</div>
	</div>
</section>

<lz-section style="background-color: #f5f5f5" v-cloak>
	<template slot="title">Storytelling</template>
	<template slot="content">Playwalk is a mobile entertainment application that aims at exploring the city through play for a more mindful, meaningful, and engaging experience for the user. </template>
	<lz-image slot="image" src="{{ asset('images/playwalk/banner-disable') }}">
		<p slot="bottom">Playwalk’s founders hope to help people become more connected with their cities and the cities they visit through sense-guided exploration and active play.</p>
	</lz-image>
</lz-section>

<section class="section" v-cloak>
	<div class="container">
		<div class="columns is-multiline has-text-centered">
			<div class="column is-8 is-offset-2 portfolio-detail">
				<h3 class="title is-4">Survey</h3>
				<p class="is-6">Our team created an online survey and got back around 200 responses. With the feedback, we were able to obtain a significant amount of quantitative data for our analysis.</p>
				<div class="columns">
					<div class="column is-half">
						<lz-image slot="image" src="{{ asset('images/playwalk/survey01') }}">
						</lz-image>	
					</div>
					<div class="column is-half">
						<lz-image slot="image" src="{{ asset('images/playwalk/survey02') }}">
						</lz-image>	
					</div>
				</div>
				<hr>
				<h3 class="title is-4">Interviews</h3>
				<p class="is-6">We interviewed 7 participants, both current members of the Playwalk community and potential users. The interviews were more directly aimed at finding solutions, sharing experience, and keeping engagement.</p>
				<table class="table">
					<thead>
						<tr>
							<td><strong>Initials</strong></td>
							<td><strong>Rlation to Playwalk</strong></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>GC</td>
							<td>Participated in <em>Play the walk</em> in 2013</td>
						</tr>
						<tr>
							<td>MS</td>
							<td>Landscape architect. familiar with Playwalk. Never experienced it</td>
						</tr>
						<tr>
							<td>JL</td>
							<td>Artist, illustrator based in Toronto</td>
						</tr>
						<tr>
							<td>PK</td>
							<td>French teacher</td>
						</tr>
						<tr>
							<td>SL</td>
							<td>University of Toronto (UofT) student, familiar with Playwalk</td>
						</tr>
						<tr>
							<td>MC</td>
							<td>UofT student, French teacher, familiar with Toronto</td>
						</tr>
						<tr>
							<td>OM</td>
							<td>Design Consultant, coordinator and artist participated in Playwalk 2013</td>
						</tr>
					</tbody>
				</table>
				<hr>
				<h3 class="title is-4">Playmissions</h3>
				<p class="is-6">Playmissions represented the team’s first method of data gathering. Acting as participants allowed us to take part in playful urban exploration and experience sharing, giving us insight into our future users’ realities, needs, and expectations.</p>
				<lz-image slot="image" src="{{ asset('images/playwalk/playmission01-disable') }}">
				</lz-image>
				<lz-image slot="image" src="{{ asset('images/playwalk/playmission02-disable') }}">
				</lz-image>
				<hr>
				<h3 class="title is-4">Brainstorming</h3>
				<p class="is-6">Our team discussed potential features for the Playwalk application with our sponsors. These brainstorming sessions were largely informed by the results of our semi-structured interviews and playmissions.</p>
				<lz-image slot="image" src="{{ asset('images/playwalk/brainstorming01-disable') }}">
				</lz-image>
				<hr>
				<h3 class="title is-4">Decision-making</h3>
				<p class="is-6">Before we started to design wireframe prototypes, we generated a list of functions we thought the Playwalk app might have (as raised in our discussions), then narrowed it down to five core functions. Each team member and two sponsors rated each feature from 0 (shouldn’t be included) to 3 (key feature) individually, and we tallied the scores.</p>
				<lz-image slot="image" src="{{ asset('images/playwalk/brainstorming02-disable') }}">
				</lz-image>
				<hr>
				<h3 class="title is-4">Low-fidelity Design</h3>
				<p class="is-6">After our team had a better idea of the central features of the app, we started to create a number of low-fidelity prototypes to allow us to communicate our ideas with the team and our sponsors.</p>
				<div class="columns is-multiline" slot="image">
					<div class="column is-half">
						<lz-image src="{{ asset('images/playwalk/low-01') }}">
						</lz-image>
					</div>
					<div class="column is-half">
						<lz-image src="{{ asset('images/playwalk/low-02') }}">
						</lz-image>
					</div>
					<div class="column is-half">
						<lz-image src="{{ asset('images/playwalk/low-03') }}">
						</lz-image>
					</div>
					<div class="column is-half">
						<lz-image src="{{ asset('images/playwalk/low-04') }}">
						</lz-image>
					</div>
				</div>
				<hr>
				<h3 class="title is-4">Consolidation</h3>
				<p class="is-6">After the development of our initial prototypes, we came together as a group and decided on the main functions of the application and the core navigation system. Our focus was on the skeleton of the app rather than the technical details, but we also tried to develop the layout of the key screens.</p>
				<lz-image slot="image" src="{{ asset('images/playwalk/consolidation-disable') }}">
				</lz-image>
				<hr>
				<h3 class="title is-4">Design and Crafts</h3>
				<div class="columns is-multiline" slot="image">
					<div class="column is-one-third">
						<lz-image src="{{ asset('images/playwalk/high-01') }}">
							<p slot="top">Login Page</p>
						</lz-image>
					</div>
					<div class="column is-one-third">
						<lz-image src="{{ asset('images/playwalk/high-02') }}">
							<p slot="top">Discovery Page</p>
						</lz-image>
					</div>
					<div class="column is-one-third">
						<lz-image src="{{ asset('images/playwalk/high-03') }}">
							<p slot="top">Mission Detail Page</p>
						</lz-image>
					</div>
					<div class="column is-one-third">
						<lz-image src="{{ asset('images/playwalk/high-04') }}">
							<p slot="top">Mission Detail Page</p>
						</lz-image>
					</div>
					<div class="column is-one-third">
						<lz-image src="{{ asset('images/playwalk/high-05') }}">
							<p slot="top">Map Page</p>
						</lz-image>
					</div>
					<div class="column is-one-third">
						<lz-image src="{{ asset('images/playwalk/high-06') }}">
							<p slot="top">Co-walking Page</p>
						</lz-image>
					</div>
				</div>
				<hr>
				<h3 class="title is-4">Testing</h3>
				<p class="is-6">We utilized the PD tools and techniques of feedback sessions, testing workshops and interviews in order to complete user testing of our high-fidelity prototype. We performed a prototype testing session with 3 participants. Two of them had been involved in earlier stages of the user research process (one local urbanist and another tourist), while the other had little knowledge of the design idea.</p>
				<div class="columns">
					<div class="column is-one-third">
						<lz-image slot="image" src="{{ asset('images/playwalk/testing-01-disable') }}">
							<p slot="bottom" class="is-6"><strong>Tester One</strong>: Tester One was initially confused about the functionality and usability of the app, but after we explained the main idea, she thought it was really interesting. The adoptable suggestions she proposed were to show path or route of the mission due to safety concern, to provide options to choose level of mystery, and to include games like guessing the location in a shared picture.</p>
						</lz-image>
					</div>
					<div class="column is-one-third">
						<lz-image slot="image" src="{{ asset('images/playwalk/testing-02-disable') }}">							
							<p slot="bottom" class="is-6"><strong>Tester Two</strong>: In addition to the current functions, Tester Two wanted to see her friends’ availability and status (such as information on what they are doing and what missions they have completed). She was interested in competition between friends and also concerned about the potential privacy issues with the application. She suggested the development of shorter missions that can be performed within 10 minutes, and missions based on specific locations.</p>
						</lz-image>
					</div>
					<div class="column is-one-third">
						<lz-image slot="image" src="{{ asset('images/playwalk/testing-03-disable') }}">							
							<p slot="bottom" class="is-6"><strong>Tester Three</strong>: Tester Three was confused about some icons like location pins on the map and user-created missions. He suggested putting mission age as the first filter on the list, and adding the function to share users experiences through other forms of social media. He also noted the limitations of offline functionality.</p>
						</lz-image>
					</div>
				</div>
				<hr>
				<h3 class="title is-4">Testing Result</h3>
				<p class="is-6">All three testers remarked on issues such as privacy and safety issues and gave us information on their visual design preferences. All three participants thought that the prototype was clear, self-explanatory, user-friendly, and did not have major navigation problems. We modified our prototype in a number of ways based on the testing session, as you can see below.</p>
				<lz-image slot="image" src="{{ asset('images/playwalk/testing-04-disable') }}"><p slot="bottom">The above images represent two possible versions of discover page. Testers compared these two versions and concluded that the right one was much clearer. The left page was divided into six square images representing different missions. However, most of our test users said that each square contained so little information that it would be difficult to know what the mission is about. They would prefer more detailed information for each mission. Based on this feedback, we decided to go with the mission list interface. Each mission’s name, hashtags, difficulty, number of players, time, and popularity is displayed.</p>
				</lz-image>
				<lz-image slot="image" src="{{ asset('images/playwalk/testing-05-disable') }}"><p slot="bottom">The above images are two versions of our map page. For the left version (used during testing), users complained that they had no idea about what each pin represented. At first, we changed our pins into different colors, but user still said that they had difficulty distinguishing the meanings behind the colors. Finally, we changed our icons into representations of the five senses with different colors. These allow users to quickly and intuitively understand the content represented by each pin.</p>
				</lz-image>
				<hr>
				<h3 class="title is-4">Further Steps</h3>
				<p class="is-6">Our team completed our goal of developing a high fidelity prototype for Playwalk through the use of Participatory Design techniques. The user testing helped us to partially answer a number of questions about how our users interact with the application in a real-world context. However, the testing seesion also raised new questions about how to redesign the application.</p>
				<table class="table">
					<thead>
						<tr>
							<td><strong>Answered by Testing Session</strong></td>
							<td><strong>Raised by Testing Session</strong></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>How does the prototype assist our users in exploring the city and sharing their experiences?</td>
							<td>How can we improve the features of the app that our users found useful?</td>
						</tr>
						<tr>
							<td>Do the key features of the prototype correspond to the most used features within the app?</td>
							<td>What are the app’s key features?<br>What features should the application be built around?</td>
						</tr>
						<tr>
							<td>Can users easily navigate through the app and find the features that they need?</td>
							<td>Is the core navigation system used in the prototype suitable for the final app?<br>How can we make it easier for our users to find and use the core features of the app?<br>Are there any navigation problems that need to be fixed?</td>
						</tr>
						<tr>
							<td>Were there any user needs unmet by the prototype?</td>
							<td>What new features or functions can be added to the application?</td>
						</tr>
						<tr>
							<td>What was the user’s opinion on the app’s visual design?</td>
							<td>How can we make the application aesthetically pleasing while keeping it functional?</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<lz-section style="background-color: #f5f5f5">
	<template slot="title">Information</template>
	<template slot="content">
		<div class="columns">
			<div class="column is-one-third has-text-left">
				<p class="header"><strong>Time</strong></p>
				<p>September 2014 - December 2014</p>
			</div>
			<div class="column is-one-third has-text-left">
				<p class="header"><strong>Group Member</strong></p>
				<ul>
					<li>Benjamin Caughran</li>
					<li><a href="https://www.linkedin.com/in/dantinggao/">Danting (Dannie) Gao</a></li>
					<li><a href="https://www.linkedin.com/in/gulily/">Lily Gu</a></li>
					<li><a href="https://www.linkedin.com/in/lishuoz/">Lishuo Zhang</a></li>
					<li><a href="https://www.linkedin.com/in/mari-roohi-70367995/">Marzieh (Mari) Roohi</a></li>
					<li><a href="https://www.linkedin.com/in/shunan-chen-2587b311b/">Shunan Chen</a></li>
				</ul>
			</div>
			<div class="column is-one-third has-text-left">
				<p class="header"><strong>Presentation</strong></p>
				<p><a href="https://prezi.com/cxcx6qxzkypo/playwalk/?utm_campaign=share&utm_medium=copy" target="_blank">Visit Site</a></p>
			</div>
		</div>
	</template>
</lz-section>

<lz-section>
	<template slot="content">
		<a class="button is-large is-link" href="/projects">Go Back</a>
		<a class="button is-large is-primary">Next Project</a>
	</template>
</lz-section>
@endsection