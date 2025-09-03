<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form method="POST" action="{{ route('register') }}">
        @csrf
      @yield('content')
    </form>
  </div>
</div>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: "Inter", sans-serif;
  }

  /* Container for banner and form */
  .container {
    max-width: 650px;
    margin: 0 auto;
    padding: 0 20px;
  }

  /* Banner styling */
  .banner-wrapper {
    width: 100%;
    text-align: center;
    margin-bottom: 24px;
  }

  .banner {
    width: 100%;
    max-height: 180px;
    object-fit: cover;
    border-radius: 8px;
  }

  /* Form wrapper styling */
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    width: 100%;
    background: white;
  }

  .formbold-form-label {
    display: block;
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    margin-bottom: 12px;
  }

  .formbold-mb-5 {
    margin-bottom: 20px;
  }

  .formbold-form-input {
    width: 100%;
    padding: 12px 24px;
    border-radius: 6px;
    border: 1px solid #e0e0e0;
    background: white;
    font-weight: 500;
    font-size: 16px;
    color: #6b7280;
    outline: none;
    resize: none;
  }

  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-btn {
    text-align: center;
    font-size: 16px;
    border-radius: 6px;
    padding: 14px 32px;
    border: none;
    font-weight: 600;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
  }

  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold--mx-3 {
    margin-left: -12px;
    margin-right: -12px;
  }

  .formbold-px-3 {
    padding-left: 12px;
    padding-right: 12px;
  }

  .flex {
    display: flex;
  }

  .flex-wrap {
    flex-wrap: wrap;
  }

  .w-full {
    width: 100%;
  }

  @media (min-width: 540px) {
    .sm\:w-half {
      width: 50%;
    }
  }

  /* Checkbox label styling */
  .formbold-checkbox-label {
    display: flex;
    align-items: center;
    font-weight: 500;
    font-size: 14px;
    color: #07074d;
  }

  .formbold-checkbox-label input[type="checkbox"] {
    margin-right: 12px;
  }

  /* Success alert styling */
.formbold-alert-success {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #e6f4ea;
    border: 1px solid #27ae60;
    color: #1e4620;
    padding: 12px 16px;
    border-radius: 6px;
    margin-bottom: 20px;
    font-weight: 500;
    font-size: 15px;
}

.formbold-alert-text {
    flex: 1;
}

.formbold-alert-close {
    background: transparent;
    border: none;
    font-size: 16px;
    font-weight: 700;
    color: #1e4620;
    cursor: pointer;
    margin-left: 12px;
}

</style>
