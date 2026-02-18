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
        "Jen works across four areas \u2014 here\u2019s the quick rundown:",
        "\u2709\uFE0F Email Development \u2014 hand-coded emails that land right in every inbox\n\uD83D\uDDA5\uFE0F Landing Pages \u2014 pages designed to keep visitors scrolling and clicking\n\uD83D\uDC8E Premium Websites \u2014 complete sites built for speed, mobile, and results\n\uD83E\uDD16 AI Solutions \u2014 intelligent systems that run and make decisions on their own",
        "Want to see examples of any of these?"
      ],
      chips: ["Email Development", "Landing Pages", "Premium Websites", "AI Solutions", "Start Over"]
    },
    "See Examples": {
      messages: [
        "Jen\u2019s work covers four categories:",
        "\u2709\uFE0F Email Development \u2014 pixel-perfect emails tested across every major client\n\uD83D\uDDA5\uFE0F Landing Pages \u2014 eye-catching pages that guide visitors to take action\n\uD83D\uDC8E Premium Websites \u2014 polished multi-page builds ready for the real world\n\uD83E\uDD16 AI Solutions \u2014 smart engines doing real work behind the scenes",
        "Scroll up to explore them, or pick a category below!"
      ],
      chips: ["Email Development", "Landing Pages", "Premium Websites", "AI Solutions", "Start Over"]
    },
    "Email Development": {
      messages: [
        "Jen hand-codes every email from scratch \u2014 no drag-and-drop builders, no templates. Here are a few:",
        "\u2708\uFE0F Flight Booking Promo \u2014 gets people clicking with a time-sensitive offer layout\n\uD83C\uDFB5 Arts Fest Invite \u2014 high-energy event email that turns heads in any inbox\n\uD83D\uDCE6 Transactional Receipt \u2014 the kind of order confirmation that actually builds brand trust\n\u2708\uFE0F Travel Promo \u2014 makes you want to pack a bag the second you open it",
        "All of them are tested across 90+ email clients to make sure nothing breaks."
      ],
      chips: ["Landing Pages", "Premium Websites", "Get in Touch", "Start Over"]
    },
    "Landing Pages": {
      messages: [
        "Every landing page Jen builds is designed to keep people on the page \u2014 and then take action. Here are a few:",
        "\uD83D\uDC14 Blue Chicken \u2014 fun brand energy with a layout that keeps you exploring\n\u2615 Warm Brew \u2014 the kind of page that makes you crave a cup just by looking at it\n\uD83D\uDC8E Fine Jewelry \u2014 high-end feel with every detail in the right place\n\uD83C\uDF3F Solace \u2014 soft, calming design that puts visitors at ease",
        "All hand-coded, no page builders, and fully responsive on every screen size."
      ],
      chips: ["Email Development", "Premium Websites", "Get in Touch", "Start Over"]
    },
    "Premium Websites": {
      messages: [
        "Jen\u2019s premium builds are full websites \u2014 not just pages, but complete experiences:",
        "\uD83E\uDDD8 Therapy Multipage \u2014 a multi-page site that makes visitors feel safe enough to reach out\n\u26F0\uFE0F SummitQuest \u2014 high-energy one-pager that gets coaching clients fired up\n\uD83D\uDE80 SaaS Agency \u2014 clean, modern site with theme switching built right in",
        "Everything is built for speed, mobile-first, and designed to convert."
      ],
      chips: ["Email Development", "Landing Pages", "Get in Touch", "Start Over"]
    },
    "AI Solutions": {
      messages: [
        "This is where Jen goes beyond the browser \u2014 building systems that think, react, and run on their own:",
        "\uD83C\uDFB5 ColorTuneLyrics \u2014 a music experience that brings lyrics to life on screen in real time.\n\uD83D\uDCC8 Stock Market MCP Engine \u2014 an autonomous trading system wired into a live brokerage.\n\uD83D\uDCDE Nicole AI \u2014 a complete AI sales pipeline from first conversation to booked appointment.",
        "All three are built. Want the details on any of them?"
      ],
      chips: ["ColorTuneLyrics", "Stock Market MCP", "Nicole AI", "Start Over"]
    },
    ColorTuneLyrics: {
      messages: [
        "ColorTuneLyrics is Jen\u2019s most visual build \u2014 a full music experience running live at colortunelyrics.com.",
        "Pick a song and the whole screen lights up \u2014 lyrics scroll in time, sheet music follows along, and the visuals react to every beat.",
        "It\u2019s live right now \u2014 scroll up to the AI Engines section to try it!"
      ],
      chips: ["Stock Market MCP", "Nicole AI", "Get in Touch", "Start Over"]
    },
    "Stock Market MCP": {
      messages: [
        "The Stock Market MCP Engine is Jen\u2019s most technical build \u2014 an AI that manages real money.",
        "It watches the market around the clock, spots opportunities, makes decisions, and places trades through a real brokerage account \u2014 all without human input.",
        "The dashboard is private, but you can see a screenshot in the AI Engines section above."
      ],
      chips: ["ColorTuneLyrics", "Nicole AI", "Get in Touch", "Start Over"]
    },
    "Nicole AI": {
      messages: [
        "Nicole AI is Jen\u2019s take on a fully automated sales pipeline \u2014 built to handle outreach from start to finish.",
        "It kicks off with a chatbot that screens potential leads and figures out if they\u2019re a good fit \u2014 then a voice AI agent picks up the phone, has the conversation, and books the call. Everything syncs through MCP tools and a live calendar.",
        "The demo is private, but you can check out the dashboard in the AI Engines section above."
      ],
      chips: ["ColorTuneLyrics", "Stock Market MCP", "AI Solutions", "Start Over"]
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
