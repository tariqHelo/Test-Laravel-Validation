{{-- Form without any design --}}

{{-- TASK: add the validation errors here - with whatever HTML structure you want --}}
{{-- in case of title/description empty, visitor should see --}}
{{-- "The name field is required." and "The description field is required." --}}

@if ($errors->any())
    <div style="color:red;">
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif

<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    Title:
    <br />
    <input type="text" name="title"  value="{{ old('title') }}" />
    @error('title')
        <ul>
            <li>{{ $message }}</li>
        </ul>
    @enderror
    <br /><br />
    Description:
    <br />
    <input type="text" name="description"  value="{{ old('description') }}" />
    @error('description')
        <ul>
            <li>{{ $message }}</li>
        </ul>
    @enderror
    <br /><br />
    <button type="submit">Save</button>
</form>
