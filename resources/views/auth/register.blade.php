@extends('layouts.front')

@section('content')

<div class="container">
  <!-- Banner aligned with form -->
  <div class="banner-wrapper mb-6">
    <img src="{{ asset('PHOTO-2025-08-25-16-21-01.jpg') }}" alt="Banner" class="banner" />
  </div>
  @if(session('success'))
    <div class="formbold-alert-success">
        <span class="formbold-alert-text">✅ {{ session('success') }}</span>
        <button type="button" class="formbold-alert-close" onclick="this.parentElement.style.display='none'">✖</button>
    </div>
@endif




  <div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="flex flex-wrap formbold--mx-3">
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <label for="name" class="formbold-form-label"> Full Name </label>
              <input type="text" name="name" id="name" placeholder="First Name" class="formbold-form-input @error('name') is-invalid @enderror" required/>
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror  
            </div>
          </div>

          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <label for="surname" class="formbold-form-label"> Last Name </label>
              <input type="text" name="surname" id="surname" placeholder="Last Name" class="formbold-form-input @error('surname') is-invalid @enderror" required/>
              @error('surname')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
        </div>

        <div class="flex flex-wrap formbold--mx-3">
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <label for="email" class="formbold-form-label">{{ __('Email Address') }}</label>
                <input type="email" name="email" id="email" placeholder="Email Address" class="formbold-form-input @error('email') is-invalid @enderror" required/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror   
            </div>
          </div>

          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <label for="phone" class="formbold-form-label">{{ __('Cellphone Number') }}</label>
                <input type="tel" name="phone" id="phone" placeholder="+27 71 234 5678" class="formbold-form-input @error('phone') is-invalid @enderror" pattern="^(?:\+27|0)\d{9}$" title="Enter a valid South African phone number. Example: +27712345678 or 0712345678" required />
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror 
            </div>
          </div>
        </div>

        <div class="formbold-mb-5">
          <label for="province" class="formbold-form-label">{{ __('Province') }}</label>
          <select id="province" name="province" class="formbold-form-input @error('province') is-invalid @enderror" required>
            <option value="">Select Province</option>
            <option value="Gauteng">Gauteng</option>
            <option value="North West">North West</option>
            <option value="Limpopo">Limpopo</option>
            <option value="Mpumalanga">Mpumalanga</option>
            <option value="Free State">Free State</option>
            <option value="Kwa Zulu Natal">Kwa Zulu Natal</option>
            <option value="Northern Cape">Northern Cape</option>
            <option value="Western Cape">Western Cape</option>
            <option value="Eastern Cape">Eastern Cape</option>
          </select>
          @error('province')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror  
        </div>

        <div class="flex flex-wrap formbold--mx-3">
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <label for="age_group" class="formbold-form-label"> Age Group </label>
              <select id="age_group" name="age_group" class="formbold-form-input @error('age_group') is-invalid @enderror" required>
                <option value="">Select Age Group</option>
                <option value="Under 16">Under 16</option>
                <option value="16–18">16–18</option>
                <option value="19–24">19–24</option>
                <option value="25–34">25–34</option>
              </select>
              @error('age_group')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror  
            </div>
          </div>

          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <label for="gender" class="formbold-form-label"> Gender </label>
              <select id="gender" name="gender" class="formbold-form-input @error('gender') is-invalid @enderror" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other / Prefer not to say">Other / Prefer not to say</option>
              </select>
              @error('gender')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror 
            </div>
          </div>
        </div>

        <div class="flex flex-wrap formbold--mx-3">
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <label for="school_name" class="formbold-form-label"> School / Institution / Organisation </label>
              <input type="text" name="school_name" id="school_name" placeholder="School / Institution / Organisation" class="formbold-form-input @error('school_name') is-invalid @enderror" required/>
              @error('school_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror  
            </div>
          </div>

          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <label for="qualification" class="formbold-form-label"> Grade / Qualification Level </label>
              <select id="qualification" name="qualification" class="formbold-form-input @error('qualification') is-invalid @enderror" required>
                <option value="">Select Grade / Qualification Level</option>
                <option value="Grade 9">Grade 9</option>
                <option value="Grade 10">Grade 10</option>
                <option value="Grade 11">Grade 11</option>
                <option value="Grade 12">Grade 12</option>
                <option value="N1–N6">N1–N6</option>
                <option value="Diploma">Diploma</option>
                <option value="Degree">Degree</option>
                <option value="Not in School / Unemployed">Not in School / Unemployed</option>
              </select>
              @error('qualification')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror 
            </div>
          </div>
        </div>

        <div class="flex flex-wrap formbold--mx-3">
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <label for="career" class="formbold-form-label"> Career Interest(s) </label>
              <select id="career" name="career" multiple class="formbold-form-input @error('career') is-invalid @enderror" required>
                <option value="">Select Career Interest</option>
                <option value="Engineering">Engineering</option>
                <option value="IT / Software">IT / Software</option>
                <option value="Hospitality">Hospitality</option>
                <option value="Business / Finance">Business / Finance</option>
                <option value="Media / Creative">Media / Creative</option>
                <option value="Law">Law</option>
                <option value="Education">Education</option>
                <option value="Agriculture">Agriculture</option>
                <option value="Other">Other</option>
              </select>
              @error('career')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror  
            </div>
          </div>

          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <label for="interested_in" class="formbold-form-label"> Interested in: (Allow multiple choices) </label>
              <select id="interested_in" name="interested_in" multiple class="formbold-form-input @error('interested_in') is-invalid @enderror" required>
                <option value="Chef Program">Chef Program</option>
                <option value="Learnerships">Learnerships</option>
                <option value="Career Workshops / Guidance">Career Workshops / Guidance</option>
              </select>
              @error('interested_in')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror 
            </div>
          </div>
        </div>

        <div class="formbold-mb-5">
          <label class="formbold-checkbox-label">
            <input type="checkbox" name="agree_contact" required />
            <span class="formbold-checkbox-label-text">I agree to be contacted by PTI and partners for career and learning opportunities</span>
          </label>
        </div>

        <div>
          <button type="submit" class="formbold-btn">Submit</button>
        </div>

      </form>
    </div>
  </div>
</div>

@endsection

