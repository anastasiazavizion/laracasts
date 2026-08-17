 @if($errors->any())
    <ul class="mt-6 text-sm/6 text-red-600">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif