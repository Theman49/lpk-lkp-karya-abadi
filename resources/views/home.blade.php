@extends('../layouts/main')

@section('content')
<div class="flex gap-5 p-7">
    <div>
        <p class="text-display">Display</p>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <p class="text-body">body 1</p>
        <p class="text-body-2">body 2</p>
    </div>

    <div class="grid gap-5 grid-cols-3 text-body-2">
        <div class="bg-primary w-[100px] h-[100px] flex flex-col justify-center items-center text-white">
            <p>primary</p>
            <p>#10A19D</p>
        </div>
        <div class="bg-secondary w-[100px] h-[100px] flex flex-col justify-center items-center text-white">
            <p>secondary</p>
            <p>#EB6440</p>
        </div>
        <div class="bg-black w-[100px] h-[100px] flex flex-col justify-center items-center text-white">
            <p>black</p>
            <p>#121212</p>
        </div>
        <div class="bg-grey-1 w-[100px] h-[100px] flex flex-col justify-center items-center">
            <p>grey 1</p>
            <p>#C6CCD2</p>
        </div>
        <div class="bg-grey-2 w-[100px] h-[100px] flex flex-col justify-center items-center">
            <p>grey 2</p>
            <p>#DDDDDD</p>
        </div>
    </div>

</div>
@endsection