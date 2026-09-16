document.querySelectorAll(".enquiryForm").forEach(function (form) {

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        const submitBtn = form.querySelector('button[type="submit"]');

        // Double click rokne ke liye
        if (submitBtn.disabled) {
            return;
        }

        submitBtn.disabled = true;
        submitBtn.innerHTML = `
            <span class="spinner-border spinner-border-sm me-2"></span>
            Submitting...
        `;

        let name = form.querySelector('[name="name"]').value;
        let email = form.querySelector('[name="email"]').value;
        let phone = form.querySelector('[name="phone"]').value;
        let course = form.querySelector('[name="course"]').value;
        let qualification = form.querySelector('[name="qualification"]').value;

        let utmsrc = new URLSearchParams(window.location.search).get("utm_source");
        let utmmedium = new URLSearchParams(window.location.search).get("utm_medium");
        let utmcampaign = new URLSearchParams(window.location.search).get("utm_campaign");

        const payload = [
            {
                "candidate_name": name,
                "candidate_number": phone,
                "email_id": email,
                "class_name": qualification,
                "college_id": 9,
                "college_name": "Manipal",
                "location": "",
                "postal_code": "",
                "query": course,
                "source": "Website",
                "enquiry_type": "Career Counselling",
                "utm_Source": utmsrc || "",
                "data_provider": "DW",
                "entry_by": "9998887771",
                "extra_fields": {
                    "Course": course,
                    "UTM_Medium": utmmedium || "",
                    "UTM_Campaign": utmcampaign || "",
                    "UTM_Url": window.location.href,
                    "Page_url": window.location.pathname,
                    "Data_Source": "Website Form"
                }
            }
        ];

        // Pehle Network me dekhne ke liye
        console.log("API Payload:", payload);

        fetch("api/submit-form.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(payload)
        })
            .then(response => response.json())
            .then(data => {

                console.log("API Response:", data);

                if (data.status == 200 || data.error == 0) {
                    window.location.href = "thankyou.html";
                } else {
                    alert("Form submission failed!");
                }

            })
            .catch(error => {
                console.error(error);
                alert("Something went wrong!");
            });

    });

});