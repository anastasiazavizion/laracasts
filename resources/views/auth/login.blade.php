<x-layout>

    <form method="POST" action="/login" class="mt-6">
        @csrf

    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-full border p-4">
  <legend class="fieldset-legend">Login</legend>

  <label class="label">Email</label>
  <input name="email" type="email" class="input" placeholder="Email" required />

  <label class="label">Password</label>
  <input name="password" type="password" class="input" placeholder="Password" required />

  <button class="btn btn-neutral mt-4">Login</button>
</fieldset>

<x-form.errors />

    </form>

    <p class="mt-6 text-center text-gray-400">
        Don't have an account? <a href="/register" class="text-indigo-600 hover:text-indigo-500">Register</a>
    </p>

</x-layout>
