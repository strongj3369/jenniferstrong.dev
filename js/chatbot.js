(function () {
  var responses = {
    greeting: {
      messages: [
        "Hi there! I'm Jen's portfolio assistant.",
        "I can tell you about her work, skills, or how to get in touch. What are you curious about?"
      ],
      chips: ["About Me", "My Work", "Let's Connect", "Availability"]
    },
    "About Me": {
      messages: [
        "Jennifer is a creative technologist and systems builder who crafts modular, high-performing templates and landing pages.",
        "She combines emotional intelligence with technical precision \u2014 blending human-centered design with AI-assisted development."
      ],
      chips: ["Skills", "Experience", "My Work", "Let's Connect"]
    },
    Skills: {
      messages: [
        "Here\u2019s what Jen works with:",
        "\u2022 HTML5, CSS3, JavaScript (responsive design)\n\u2022 Responsive email development (cross-client)\n\u2022 Landing page design & conversion optimization\n\u2022 Modular design systems & component architecture\n\u2022 AI-assisted workflows (Claude, GPT-4)\n\u2022 Google Analytics (GA4) & funnel tracking\n\u2022 Accessibility & SEO best practices"
      ],
      chips: ["About Me", "My Work", "Let's Connect"]
    },
    Experience: {
      messages: [
        "Jen has 8+ years building conversion-focused digital experiences \u2014 from airline promo emails and event invites to coffee brand landing pages, luxury showcases, and premium multipage sites.",
        "Every project is crafted with intention: mobile-first, accessible, and designed to convert. She\u2019s also an AI-assisted workflow pioneer and educator."
      ],
      chips: ["My Work", "Skills", "Let's Connect"]
    },
    "My Work": {
      messages: [
        "Jen\u2019s portfolio spans three categories:",
        "\u2709\uFE0F Email Templates \u2014 responsive, modular emails for real-world inboxes\n\uD83D\uDDA5\uFE0F Landing Pages \u2014 conversion-focused layouts with personality\n\uD83D\uDC8E Premium Sites \u2014 full multipage builds engineered for performance",
        "Scroll up to explore them, or pick a category below!"
      ],
      chips: ["Email Templates", "Landing Pages", "Premium Sites", "Let's Connect"]
    },
    "Email Templates": {
      messages: [
        "Jen\u2019s email templates include:",
        "\u2708\uFE0F Flight Booking Promo \u2014 vibrant airline deal layout\n\uD83C\uDFB5 Arts Fest Invite \u2014 bold event-style email\n\uD83D\uDCE6 Transactional Receipt \u2014 clean order confirmation\n\u2708\uFE0F Travel Promo \u2014 aspirational travel email",
        "All built with table-based layouts for maximum email client compatibility."
      ],
      chips: ["Landing Pages", "Premium Sites", "Let's Connect"]
    },
    "Landing Pages": {
      messages: [
        "Jen\u2019s landing pages include:",
        "\uD83D\uDC14 Blue Chicken \u2014 playful brand page with interactive modals\n\u2615 Warm Brew \u2014 cozy coffee brand showcase\n\uD83D\uDC8E Fine Jewelry \u2014 luxury aesthetic with refined typography\n\uD83C\uDF3F Solace \u2014 calm, wellness-focused layout",
        "Each one is fully responsive and built from scratch."
      ],
      chips: ["Email Templates", "Premium Sites", "Let's Connect"]
    },
    "Premium Sites": {
      messages: [
        "Jen\u2019s premium builds include:",
        "\uD83E\uDDD8 Therapy Multipage \u2014 responsive multipage site for therapy practices\n\u26F0\uFE0F SummitQuest \u2014 single-page adventure coaching layout\n\uD83D\uDE80 SaaS Agency \u2014 dark/light mode template for modern SaaS",
        "These are full-featured, engineered for performance and conversion."
      ],
      chips: ["Email Templates", "Landing Pages", "Let's Connect"]
    },
    "Let's Connect": {
      messages: [
        "I\u2019d love for you to reach out!",
        "The best way to connect with Jen is via email:"
      ],
      email: true,
      chips: ["About Me", "My Work", "Availability"]
    },
    Availability: {
      messages: [
        "Jen is currently available for freelance projects, creative partnerships, and strategic collaborations.",
        "If you have a project in mind, don\u2019t hesitate to reach out!"
      ],
      chips: ["Let's Connect", "About Me", "My Work"]
    }
  };

  var messagesEl = document.getElementById("chatbot-messages");
  var chipsEl = document.getElementById("chatbot-chips");

  function addBotMessage(text, delay) {
    return new Promise(function (resolve) {
      setTimeout(function () {
        var bubble = document.createElement("div");
        bubble.className = "chat-bubble bot";
        bubble.textContent = text;
        messagesEl.appendChild(bubble);
        scrollToBottom();
        resolve();
      }, delay);
    });
  }

  function addEmailLink(delay) {
    return new Promise(function (resolve) {
      setTimeout(function () {
        var bubble = document.createElement("div");
        bubble.className = "chat-bubble bot";
        var link = document.createElement("a");
        link.href = "mailto:jstrong264@gmail.com";
        link.className = "chatbot-email-link";
        link.textContent = "jstrong264@gmail.com";
        link.addEventListener("click", function () {
          if (typeof gtag === "function") {
            gtag("event", "email_click", {
              event_category: "chatbot",
              event_label: "Chatbot Email Link"
            });
          }
        });
        bubble.appendChild(document.createTextNode("\u2709\uFE0F "));
        bubble.appendChild(link);
        messagesEl.appendChild(bubble);
        scrollToBottom();
        resolve();
      }, delay);
    });
  }

  function addUserMessage(text) {
    var bubble = document.createElement("div");
    bubble.className = "chat-bubble user";
    bubble.textContent = text;
    messagesEl.appendChild(bubble);
    scrollToBottom();
  }

  function showChips(chipLabels) {
    chipsEl.innerHTML = "";
    chipLabels.forEach(function (label) {
      var btn = document.createElement("button");
      btn.className = "chip";
      btn.textContent = label;
      btn.addEventListener("click", function () {
        handleChipClick(label);
      });
      chipsEl.appendChild(btn);
    });
  }

  function scrollToBottom() {
    messagesEl.scrollTop = messagesEl.scrollHeight;
  }

  function handleChipClick(topic) {
    var data = responses[topic];
    if (!data) return;

    if (typeof gtag === "function") {
      gtag("event", "chatbot_interaction", {
        event_category: "chatbot",
        event_label: topic
      });
    }

    addUserMessage(topic);
    chipsEl.innerHTML = "";

    var delay = 400;
    var chain = Promise.resolve();
    data.messages.forEach(function (msg) {
      chain = chain.then(function () {
        return addBotMessage(msg, delay);
      });
      delay += 600;
    });

    if (data.email) {
      chain = chain.then(function () {
        return addEmailLink(400);
      });
    }

    chain.then(function () {
      setTimeout(function () {
        showChips(data.chips);
      }, 300);
    });
  }

  function init() {
    var data = responses.greeting;
    var delay = 500;
    var chain = Promise.resolve();
    data.messages.forEach(function (msg) {
      chain = chain.then(function () {
        return addBotMessage(msg, delay);
      });
      delay += 800;
    });
    chain.then(function () {
      setTimeout(function () {
        showChips(data.chips);
      }, 300);
    });
  }

  setTimeout(init, 600);
})();
