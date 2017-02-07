
<div class="container">
	<ul>
		@foreach ($users as $user)
			<li>
				<a href="content/{{ $user->id }}">{{ $user->name }}{{ $user->id }} </a>
			</li>
		@endforeach
	</ul>

	{{ $users->fragment('p1')->appends(['hot' => '1','rec'=>1])->links() }}
</div>