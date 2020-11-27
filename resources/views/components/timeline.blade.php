<div>
@forelse($tweets as $tweet)
<x-tweet :tweet="$tweet"/>
@empty
<div class="border border-gray-300 rounded-md">
<p class="p-4">No tweets yet!</p>
</div>
@endforelse
{{ $tweets->links() }}
</div>