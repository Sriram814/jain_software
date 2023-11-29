let brokers = [];

function adminLogin() {
    var adminUsername = document.getElementById('adminUsername').value;
    var adminPassword = document.getElementById('adminPassword').value;

    if (adminUsername && adminPassword) {
        document.getElementById('login-section').style.display = 'none';
        document.getElementById('admin-dashboard').style.display = 'block';
        showSection('add-broker'); // Display Add Broker section by default after login
    } else {
        alert('Invalid credentials. Please try again.');
    }
}

function logout() {
    document.getElementById('login-section').style.display = 'block';
    document.getElementById('admin-dashboard').style.display = 'none';
}

function showSection(sectionId) {
    document.getElementById('add-broker').style.display = 'none';
    document.getElementById('view-brokers').style.display = 'none';

    document.getElementById(sectionId).style.display = 'block';

    if (sectionId === 'view-brokers') {
        displayBrokers();
    }
}

function addBroker() {
    var brokerName = document.getElementById('brokerName').value;
    var brokerContact = document.getElementById('brokerContact').value;
    var brokerEmail = document.getElementById('brokerEmail').value;
    var brokerExperience = document.getElementById('brokerExperience').value;

    brokers.push({ name: brokerName, contact: brokerContact, email: brokerEmail, experience: brokerExperience });
    alert('Broker added successfully!');
    displayBrokers();
}

function displayBrokers() {
    var brokersList = document.getElementById('brokersList');
    brokersList.innerHTML = '<ul>';

    for (var i = 0; i < brokers.length; i++) {
        brokersList.innerHTML += '<li>Name: ' + brokers[i].name + '<br>Contact: ' + brokers[i].contact + '<br>Email: ' + brokers[i].email + '<br>Experience: ' + brokers[i].experience + ' years</li>';
    }

    brokersList.innerHTML += '</ul>';
}
