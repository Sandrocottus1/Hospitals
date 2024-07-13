document.addEventListener("DOMContentLoaded", function () {

    const locationSelect = document.getElementById("location");
    fetch("location.php")
        .then(response => response.json())
        .then(data => {
            data.forEach(location => {
                const option = document.createElement("option");
                option.value = location.id;
                option.textContent = location.name;
                locationSelect.appendChild(option);
            });
        });
    updateHospitalDropdown();
    updateDepartmentDropdown();
    updateDoctorDropdown();
});
function updateHospitalDropdown() {
    const locationId = document.getElementById("location").value;
    const hospitalSelect = document.getElementById("hospital");
    hospitalSelect.innerHTML = "<option value=''>Select Hospital</option>";
    if (locationId !== "") {
        fetch(`hospitals.php?location_id=${locationId}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(hospital => {
                    const option = document.createElement("option");
                    option.value = hospital.id;
                    option.textContent = hospital.name;
                    hospitalSelect.appendChild(option);
                });
            });
    }else{
        fetch("hospitals.php")
            .then(response => response.json())
            .then(data => {
                data.forEach(hospital => {
                    const option = document.createElement("option");
                    option.value = hospital.id;
                    option.textContent = hospital.name;
                    hospitalSelect.appendChild(option);
                });
            });
    }
}
function updateDepartmentDropdown() {
    const hospitalId = document.getElementById("hospital").value;
    const departmentSelect = document.getElementById("department");
    departmentSelect.innerHTML = "<option value=''>Select Department</option>";
    if (hospitalId !== "") {
        fetch(`department.php?hospital_id=${hospitalId}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(department => {
                    const option = document.createElement("option");
                    option.value = department.id;
                    option.textContent = department.dep;
                    departmentSelect.appendChild(option);
                });
            });
    }else{
        fetch("department.php")
            .then(response => response.json())
            .then(data => {
                data.forEach(doctor => {
                    const option = document.createElement("option");
                    option.value = department.id;
                    option.textContent = depratment.dep;
                    departmentSelect.appendChild(option);
                });
            });
    }
}
function updateDoctorDropdown() {
    const departmentId = document.getElementById("department").value;
    const doctorSelect = document.getElementById("doctor");
    doctorSelect.innerHTML = "<option value=''>Select Doctors</option>";

    if (departmentId !== "") {
        fetch(`doctors.php?department_id=${departmentId}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(doctor => {
                    const option = document.createElement("option");
                    option.value = doctor.id;
                    option.textContent = doctor.name;
                    doctorSelect.appendChild(option);
                });
            });
    }else{
        fetch("doctors.php")
            .then(response => response.json())
            .then(data => {
                data.forEach(doctor => {
                    const option = document.createElement("option");
                    option.value = doctor.id;
                    option.textContent = doctor.name;
                    doctorSelect.appendChild(option);
                });
            });
    }
}
document.getElementById("bookButton").addEventListener("click", function() {
    const selectedLocation = document.getElementById("location").options[document.getElementById("location").selectedIndex].text;
    const selectedHospital = document.getElementById("hospital").options[document.getElementById("hospital").selectedIndex].text;
    const selectedDoctor = document.getElementById("doctor").options[document.getElementById("doctor").selectedIndex].text;
    const selectedDepartment = document.getElementById("department").options[document.getElementById("department").selectedIndex].text;
    document.getElementById("selectedLocation").textContent = selectedLocation;
    document.getElementById("selectedHospital").textContent = selectedHospital;
    document.getElementById("selectedDoctor").textContent = selectedDoctor;
    document.getElementById("selectedDepartment").textContent = selectedDepartment;
    document.getElementById("confirmationPopup").style.display = "block";
});
function closePopup() {
    document.getElementById("confirmationPopup").style.display = "none";
}

