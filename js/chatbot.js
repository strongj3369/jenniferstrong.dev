(function () {
  var responses = {
    greeting: {
      messages: [
        "Hi there! I'm Jen's project assistant.",
        "I can tell you about the services she offers, show you examples, or help you get in touch. What would you like to know?"
      ],
      chips: ["Services", "See Examples", "Get in Touch", "Availability"]
    },
    Services: {
      messages: [
        "Jen offers four core services:",
        "\u2709\uFE0F Email Development \u2014 responsive HTML emails that look great in every inbox\n\uD83D\uDDA5\uFE0F Landing Pages \u2014 conversion-focused pages built for results\n\uD83D\uDC8E Premium Websites \u2014 full multipage sites engineered for performance\n\uD83E\uDD16 AI Solutions \u2014 custom engines and automations that solve real problems",
        "Want to see examples of any of these?"
      ],
      chips: ["Email Development", "Landing Pages", "Premium Websites", "AI Solutions", "Start Over"]
    },
    "See Examples": {
      messages: [
        "Jen\u2019s work spans four areas:",
        "\u2709\uFE0F Email Development \u2014 responsive, brand-aligned emails for real-world inboxes\n\uD83D\uDDA5\uFE0F Landing Pages \u2014 conversion-focused layouts with personality\n\uD83D\uDC8E Premium Websites \u2014 full multipage builds engineered for performance\n\uD83E\uDD16 AI Solutions \u2014 live automated systems powered by AI",
        "Scroll up to explore them, or pick a category below!"
      ],
      chips: ["Email Development", "Landing Pages", "Premium Websites", "AI Solutions", "Start Over"]
    },
    "Email Development": {
      messages: [
        "Jen builds responsive HTML emails that work across 50+ email clients. Here are some examples:",
        "\u2708\uFE0F Flight Booking Promo \u2014 urgency-driven airline email\n\uD83C\uDFB5 Arts Fest Invite \u2014 bold event invitation\n\uD83D\uDCE6 Transactional Receipt \u2014 clean order confirmation\n\u2708\uFE0F Travel Promo \u2014 aspirational travel email",
        "Each one is table-based for maximum inbox compatibility and tested across major email clients."
      ],
      chips: ["Landing Pages", "Premium Websites", "Get in Touch", "Start Over"]
    },
    "Landing Pages": {
      messages: [
        "Jen designs and builds landing pages that guide visitors toward action. Examples include:",
        "\uD83D\uDC14 Blue Chicken \u2014 playful brand page with interactive elements\n\u2615 Warm Brew \u2014 cozy coffee brand showcase\n\uD83D\uDC8E Fine Jewelry \u2014 luxury aesthetic with refined typography\n\uD83C\uDF3F Solace \u2014 calm, wellness-focused layout",
        "Every page is fully responsive and hand-coded from scratch."
      ],
      chips: ["Email Development", "Premium Websites", "Get in Touch", "Start Over"]
    },
    "Premium Websites": {
      messages: [
        "Jen\u2019s premium website builds include:",
        "\uD83E\uDDD8 Therapy Multipage \u2014 responsive site built for trust and conversion\n\u26F0\uFE0F SummitQuest \u2014 single-page coaching site with bold visuals\n\uD83D\uDE80 SaaS Agency \u2014 dark/light mode site for modern SaaS",
        "These are full-featured, performance-optimized, and ready for real-world use."
      ],
      chips: ["Email Development", "Landing Pages", "Get in Touch", "Start Over"]
    },
    "AI Solutions": {
      messages: [
        "Jen builds custom AI engines that actually run \u2014 not just demos:",
        "\uD83C\uDFB5 ColorTuneLyrics \u2014 a live real-time lyric visualizer that syncs music, timing, and animation. Check it out at colortunelyrics.com.\n\uD83D\uDCC8 Stock Market MCP Engine \u2014 an AI engine that monitors portfolio performance, analyzes market signals, and automates trades.",
        "Both are live and running. Want to know more about either one?"
      ],
      chips: ["ColorTuneLyrics", "Stock Market MCP", "Services", "Start Over"]
    },
    ColorTuneLyrics: {
      messages: [
        "ColorTuneLyrics is a live AI-powered lyric visualizer that Jen built from scratch.",
        "It syncs audio playback with animated sheet music and lyric display \u2014 AI coordinates audio analysis, timing, and dynamic visual effects in real time.",
        "It\u2019s live at colortunelyrics.com \u2014 scroll up to the AI Engines section to launch it!"
      ],
      chips: ["Stock Market MCP", "AI Solutions", "Get in Touch", "Start Over"]
    },
    "Stock Market MCP": {
      messages: [
        "The Stock Market MCP Engine is a custom AI system that Jen built to autonomously manage a portfolio.",
        "It connects to a brokerage API to monitor positions, analyze market signals, and execute trades in real time.",
        "The dashboard is private, but you can see a screenshot in the AI Engines section above."
      ],
      chips: ["ColorTuneLyrics", "AI Solutions", "Get in Touch", "Start Over"]
    },
    "Get in Touch": {
      messages: [
        "Great \u2014 let\u2019s get the conversation started!",
        "The best way to reach Jen is by email:"
      ],
      email: true,
      chips: ["Services", "See Examples", "Availability", "Start Over"]
    },
    Availability: {
      messages: [
        "Jen is currently taking on new projects \u2014 from single email builds to full website packages.",
        "If you have something in mind, reach out and let\u2019s talk about scope, timeline, and budget."
      ],
      chips: ["Get in Touch", "Services", "See Examples", "Start Over"]
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
    if (topic === "Start Over") {
      messagesEl.innerHTML = "";
      chipsEl.innerHTML = "";
      init();
      return;
    }

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
