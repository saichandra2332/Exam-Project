<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and conditions</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500&family=Roboto&display=swap"
        rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url(img.jpg);
            background-size: cover;
            /* filter: blur(5px); */
            z-index: -1;
            /* opacity: 0.7;
            filter: brightness(75%); */
        }

        .terms-box {
            max-width: 80%;
            /* backdrop-filter: blur(20px); */
            border: 2px solid rgba(255, 255, 255, .2);
            background-color: rgba(83, 83, 83, 0.1);
            color: #fff;
            font-family: Raleway;
            padding: 0 20px;
            overflow-y: auto;
            font-size: 14px;
        }

        .terms-text {
            padding: 0 20px;
            overflow-y: auto;
            font-size: 14;
            font-weight: 500;
            color: #fff;
        }

        .terms-text::-webkit-scrollbar {
            width: 2px;
            background-color: #282828;
        }

        .terms-text::-webkit-scrollbar-thumb {
            background-color: #f1f1f1;
        }

        .terms-text h1 {
            text-transform: uppercase;
        }

        .terms-text h4 {
            font-size: 13px;
            text-align: center;
            padding: 0 20px;
        }

        .terms-box h4 span {
            color: rgb(245, 68, 68);
            text-transform: uppercase;
        }

        .buttons {
            display: flex;
            padding: 0 20px;
            justify-content: space-between;
            padding-bottom: 50px;
            flex-wrap: wrap;
        }

        .btn {
            height: 50px;
            width: calc(50% - 6px);
            margin-bottom: 10px;
            border: 0;
            border-radius: 6px;
            font-size: 19px;
            font-weight: 500;
            color: #fff;
            transition: .3s linear;
            cursor: pointer;
        }

        .red-btn {
            background-color: rgb(245, 68, 68);
        }

        .gray-btn {
            background-color: #282828;
        }

        .btn:hover {
            opacity: .6;
        }
    </style>
</head>

<body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <div class="terms-box">
        <div class="terms-text">
            <h1>Terms And Conditions</h1>
            <p>Greetings User</p>
            <p>1. Copying, recording or saving of exam questions, or attempting to do so, is not allowed. Exam questions are the intellectual property of their respective boards and in case of a breach of copyright the boards can take direct legal action against candidates .<br><br>
  2. It is not permitted to take notes, whether electronically or on paper.<br><br>
  The following must be verified by the invigilator via webcam before the exam may begin:<br><br>
  a. The desk is clear.<br><br>
  b. No other person than the candidate is in the exam room.<br><br>
  c. The exam is taken in a full-screen window.<br><br>
  3. These should be verified by pointing the camera at the desk, screen and around the room. Where this is not possible (e.g. due to a built-in webcam), other measures such as a handheld mirror may alternatively be used.<br><br>
  4. Once the invigilator confirms the workspace as suitable and the exam has started, it is not permitted to leave this area throughout the duration of the exam, for example for toilet breaks. Leaving the workspace results in the termination of the exam.<br><br>
  5. The webcam must remain active with the candidate visible and audible to the invigilator at all times throughout the exam.<br><br>
 6. Wearing headphones or headsets during the exam is not permitted.<br><br>
  7. The candidate agrees that Certible may, as needed, appoint a second or subsequent invigilator during the exam without notice.<br><br>
 8. Once the exam has started it is not possible or permissible to leave the exam application window, doing so will lock the exam.<br><br>
 9. The candidate's attention must remain on the screen throughout the exam .<br><br>
 10. Communicating with other persons during the exam in any way is not permitted.<br><br>
</p>            <input type="checkbox" id="acceptCheckbox" style="cursor: pointer">I Agree To The <span> Terms And Conditions
            </span> And I Read The Privacy Notice
            <div class="buttons">
                <button class="btn red-btn" id="fullscreen-button" onclick="full()" style="background-color: red;">Accept</button>
                <button class="btn gray-btn" onclick="decline()" style="background-color: black;">Decline</button>
            </div>
        </div>
    </div>
    <script>
        function full() {
            const checkbox = document.getElementById('acceptCheckbox');
            if (checkbox.checked) {
                window.location.href = 'question.php?fullscreen=true';
                const e = document.documentElement,
                    r = e.requestFullscreen || e.webkitRequestFullscreen;
                r.call(e);
            } else {
                Swal.fire({
                    icon: 'info',
                    title: 'Acceptance Required',
                    text: 'Please check the box to accept the terms and conditions.',
                });
            }
        }

        function decline() {
            Swal.fire({
                icon: 'info',
                title: 'Declined',
                text: 'Please Accept the terms and conditions.',
            });
        }
    </script>
</body>

</html>
