<x-layout :title="$pageTitle"> 
    @if(session('success'))
        <div claas="bg-green-50 px-3 py-2 ">
            {{ session('success') }}
        </div>
    @endif

    <div class="button-container">
    <a href="/blog/create" class="btn">Create</a>
</div>

<style>
    .button-container {
        display: flex;
        justify-content: flex-end;
        margin-top: 50px;
    }

    .btn {
        background-color: #4f46e5;
        color: white;
        padding: 12px 18px;
        border-radius: 7px;
        text-decoration: none;
        font-size: 16px;
    }

    .btn:hover {
        background-color: #4338ca;
    }
</style>
    @foreach ($posts as $post )
       <div class="flex justify-between items-center border border-gray-200 px-4 py-6 my-2">
            <div>
                <h1 class="text-2xl"> 
                    <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
                </h1>
            </div>
            <div>
                <a class="hover:text-gray-500 text-yellow-500" href="/blog/{{ $post->id }}/edit">Edit</a>
                <form method="POST" action="/blog/{{ $post->id }}" onsubmit="return confirm('Are yor sure, this cannot be reversed ?')">
                    @csrf
                    @method('DELETE')

                    <button class="text-red-500 hover:text-gray-500">Delete</button>
                </form>
            </div>
       </div>
       <hr/>
    @endforeach
    

    {{ $posts->links() }}    
</x-layout>