<x-layout>

    <form method="POST" action="/register" class="mt-6">
        @csrf

    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-full border p-4">
  <legend class="fieldset-legend">Login</legend>

  <label class="label">Name</label>
  <input name="name" type="text" class="input" placeholder="Name" required />

  <label class="label">Email</label>
  <input name="email" type="email" class="input" placeholder="Email" required />

  <label class="label">Password</label>
  <input name="password" type="password" class="input" placeholder="Password" required />

  <label class="label">Confirm Password</label>
  <input name="password_confirmation" type="password" class="input" placeholder="Confirm Password" required />   

  <button class="btn btn-neutral mt-4">Register</button>
</fieldset>

<x-form.errors />

    </form>

</x-layout>