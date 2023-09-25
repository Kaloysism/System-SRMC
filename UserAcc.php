<!DOCTYPE html>
<html>
<head>
  <title>Patient Profile</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'usernavi.php';?>
<div style="margin-left: 250px; margin-right: 300px;">
<div class="container mt-4">
  <h1 class="mb-4">Patient Profile</h1>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" id="profileTabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="view-profile-tab" data-toggle="tab" href="#view-profile" role="tab">View Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="edit-profile-tab" data-toggle="tab" href="#edit-profile" role="tab">Edit Profile</a>
    </li>
  </ul>

  <!-- Tab content -->
  <div class="tab-content mt-4">
    <!-- View Profile Tab -->
    <div class="tab-pane active" id="view-profile" role="tabpanel">
      <!-- Display user's profile information here -->
      <p><strong>Name:</strong> John Doe</p>
      <p><strong>Email:</strong> johndoe@example.com</p>
      <p><strong>Contact Number:</strong> +1234567890</p>
      <p><strong>Address:</strong> 123 Main St, City, Country</p>
      <p><strong>Age:</strong> 30</p>
      <p><strong>Gender:</strong> Male</p>
    </div>

    <!-- Edit Profile Tab -->
    <div class="tab-pane" id="edit-profile" role="tabpanel">
      <form>
        <!-- Add form elements for editing user's profile information here -->
        <div class="form-group">
          <label for="fullName">Full Name:</label>
          <input type="text" class="form-control" id="fullName" value="John Doe" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" value="johndoe@example.com" required>
        </div>
        <div class="form-group">
          <label for="contactNumber">Contact Number:</label>
          <input type="tel" class="form-control" id="contactNumber" value="+1234567890" pattern="[0-9]{10}" required>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" class="form-control" id="address" value="123 Main St, City, Country" required>
        </div>
        <div class="form-group">
          <label for="age">Age:</label>
          <input type="number" class="form-control" id="age" value="30" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select class="form-control" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </form>
    </div>
  </div>
</div>
</div>

<!-- Include Bootstrap and jQuery JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>