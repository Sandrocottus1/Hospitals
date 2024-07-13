<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SIH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>

        <h2 class="logo"><a href="#">Logo</a></h2>
        <nav class="navigation">
            <a href="#">HOME</a>
            <a href="#">Appointment</a>
            <a href="#">Doctor</a>
            <button class="btnLogin-popup">Your Profile</button>
        </nav> 
    </header>
      <br>
      <br>
      <div class=Wrapper>
      <div id="book-appointment" >
        <h1><b>BOOK YOUR APPOINTMENT</b></h1>
      </div>
      <br>
      <div id="search-doctor" class="search">
        <form>   
            <select class="form-control form-control-sm" style="width: 700px;" id="location" name="location" onchange="updateHospitalDropdown()">
                <option value="0">Select a location</option>
              </select>
              <br>
              <select class="form-control form-control-sm" id="hospital" name="hospital" onchange="updateDepartmentDropdown()">
                <option value="0">Select Hospital</option>
              </select>
              <br>
              <select class="form-control form-control-sm" id="department" name="department" onchange="updateDoctorDropdown()">
                <option>Department</option>
              </select>
              <br>
              <select class="form-control form-control-sm" id="doctor" name="doctor">
                <option>Doctor</option>
              </select>
              <br>
              <input type="date" id="date" placeholder="Date">
              <br>
              <br>
              <select class="form-control form-control-sm">
                <option>Time</option>
                <option>9 am</option>
                <option>1 pm</option>
              </select>
              <br>
              <div class="container">
                <button class="btn btn-3" id="bookButton" type="button">BOOK APPOINTMENT</button> 
              </div>
          </form>
      <div id="confirmationPopup" class="popup">
        <div class="popup-content">
          <span class="close" onclick="closePopup()">&times;</span>
            <h2>Appointment Details</h2>
            <p><strong>Location:</strong> <span id="selectedLocation"></span></p>
            <p><strong>Hospital:</strong> <span id="selectedHospital"></span></p>
            <p><strong>Department:</strong> <span id="selectedDepartment"></span></p>
            <p><strong>Doctor:</strong> <span id="selectedDoctor"></span></p>
            <p><strong>Time:</strong> 9 am </p>
        </div>
      </div>
</div>
      <script src="script.js">  
    </script>
</body>
</html>