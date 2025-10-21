cat > resources/views/profile/edit.blade.php <<'HTML'
@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')
  <h1>Edit Profile</h1>

  {{-- flash message when profile updated --}}
  @if(session('status') === 'profile-updated')
    <div style="padding:8px; background:#e6ffed; border:1px solid #b7f2c7; margin-bottom:1rem;">
      Profile updated successfully.
    </div>
  @endif

  {{-- show validation errors --}}
  @if ($errors->any())
    <div style="padding:8px; background:#ffe6e6; border:1px solid #f2b7b7; margin-bottom:1rem;">
      <ul style="margin:0; padding-left:1.25rem;">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{-- Update profile form --}}
  <form method="POST" action="{{ route('profile.update') }}" style="max-width:480px;">
    @csrf
    @method('PATCH')

    <div style="margin-bottom:0.75rem;">
      <label for="name">Name</label><br>
      <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus style="width:100%; padding:8px;">
    </div>

    <div style="margin-bottom:0.75rem;">
      <label for="email">Email</label><br>
      <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required style="width:100%; padding:8px;">
    </div>

    <button type="submit" style="padding:8px 12px;">Save</button>
  </form>

  <hr style="margin:1.5rem 0">

  {{-- Delete account form (requires current password) --}}
  <h2 style="margin-top:0.25rem;">Delete Account</h2>
  <p style="margin-top:0; margin-bottom:0.75rem;">This will remove your account permanently.</p>

  <form method="POST" action="{{ route('profile.destroy') }}" onsubmit="return confirm('Are you sure you want to delete your account?');" style="max-width:480px;">
    @csrf
    @method('DELETE')

    <div style="margin-bottom:0.75rem;">
      <label for="password">Confirm with password</label><br>
      <input id="password" name="password" type="password" required autocomplete="current-password" style="width:100%; padding:8px;">
      @error('password')
        <div style="color:red; margin-top:0.5rem;">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" style="padding:8px 12px; background:#ffdddd; border:1px solid #ffaaaa;">
      Delete Account
    </button>
  </form>
@endsection
HTML
