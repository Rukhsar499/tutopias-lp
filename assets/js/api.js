document.querySelectorAll(".enquiryForm").forEach(function(form) {

    form.addEventListener("submit", function(e) {

        e.preventDefault();

        let name = form.querySelector('[name="name"]').value;
        let email = form.querySelector('[name="email"]').value;
        let phone = form.querySelector('[name="phone"]').value;
        let location = form.querySelector('[name="location"]').value;
        let message = form.querySelector('[name="message"]').value;

        let utmsrc = new URLSearchParams(window.location.search).get("utm_source");
        let utmmedium = new URLSearchParams(window.location.search).get("utm_medium");
        let utmcampaign = new URLSearchParams(window.location.search).get("utm_campaign");

        fetch("https://lcapi.tutopiacrm.in/api/data/collect_data", {
            method: "POST",

            headers: {
                "Content-Type": "application/json",
                "DATA_KEY": "b77a5c561934e089STVa54e08c5619"
            },

            body: JSON.stringify([
                {
                    "candidate_name": name,
                    "candidate_number": phone,
                    "source": "Website",
                    "enquiry_type": "Admission Enquiry",
                    "utm_Source": utmsrc || "",
                    "data_provider": "DW",
                    "entry_by": phone,

                    "extra_fields": {
                        "Email": email,
                        "Location": location,
                        "Message": message,
                        "UTM_Medium": utmmedium || "",
                        "UTM_Campaign": utmcampaign || "",
                        "UTM_Url": window.location.href,
                        "Page_url": window.location.pathname,
                        "Data_Source": "Website Form"
                    }
                }
            ])
        })
        .then(response => response.json())
        .then(data => {

            console.log(data);

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