// Light Gallery Script
$(document).ready(function () {
    lightGallery(document.getElementById('bootstrap-video-gallery'), {
      selector: 'a',
      plugins: [lgVideo],
      speed: 500,
      thumbnail: false
    });
  });
// End Light Gallery Script

// Start Assesment Form Script [Service Page]
//  function updatePainText(val) {
//     const feedback = document.getElementById("painFeedback");
//     let text = "";
//     let color = "";
//     if (val <= 3) {
//       text = `${val} – Light Stretching 🟢`;
//       color = "text-success";
//     } else if (val <= 6) {
//       text = `${val} – Moderate 🟡`;
//       color = "text-warning";
//     } else {
//       text = `${val} – Strong Pain 🔴`;
//       color = "text-danger";
//     }
//     feedback.textContent = text;
//     feedback.className = `form-text mt-1 fw-semibold ${color}`;
//   }

//   document.getElementById("painForm").addEventListener("submit", function (e) {
//     e.preventDefault();

//     const condition = document.querySelector('input[name="condition"]:checked').value;
//     const painLevel = parseInt(document.getElementById("painLevel").value);
//     const videosContainer = document.getElementById("videos");

//     videosContainer.innerHTML = "";

//     const allVideos = {
//       "Neck Pain": {
//         light: [
//           "https://www.youtube.com/embed/NeckLight1",
//           "https://www.youtube.com/embed/NeckLight2"
//         ],
//         moderate: [
//           "https://www.youtube.com/embed/NeckMod1",
//           "https://www.youtube.com/embed/NeckMod2"
//         ],
//         strong: [
//           "https://www.youtube.com/embed/NeckStrong1",
//           "https://www.youtube.com/embed/NeckStrong2"
//         ]
//       },
//       "Back Pain": {
//         light: [
//           "https://www.youtube.com/embed/BackLight1",
//           "https://www.youtube.com/embed/BackLight2"
//         ],
//         moderate: [
//           "https://www.youtube.com/embed/BackMod1",
//           "https://www.youtube.com/embed/BackMod2"
//         ],
//         strong: [
//           "https://www.youtube.com/embed/BackStrong1",
//           "https://www.youtube.com/embed/BackStrong2"
//         ]
//       },
//       "Knee Pain": {
//         light: [
//           "https://www.youtube.com/embed/KneeLight1",
//           "https://www.youtube.com/embed/KneeLight2"
//         ],
//         moderate: [
//           "https://www.youtube.com/embed/KneeMod1",
//           "https://www.youtube.com/embed/KneeMod2"
//         ],
//         strong: [
//           "https://www.youtube.com/embed/KneeStrong1",
//           "https://www.youtube.com/embed/KneeStrong2"
//         ]
//       }
//     };

//     let levelKey = "";
//     if (painLevel <= 3) levelKey = "light";
//     else if (painLevel <= 6) levelKey = "moderate";
//     else levelKey = "strong";

//     const selectedVideos = allVideos[condition]?.[levelKey] || [];

//     selectedVideos.forEach(url => {
//       const iframe = document.createElement("iframe");
//       iframe.src = url;
//       iframe.width = "100%";
//       iframe.height = "315";
//       iframe.frameBorder = "0";
//       iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
//       iframe.allowFullscreen = true;
//       iframe.classList.add("mb-3");
//       videosContainer.appendChild(iframe);
//     });

//     document.getElementById("videoSection").style.display = "block";
//   });
// End Assesment Form Script [Service Page]


