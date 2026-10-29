<?php
$issteps = 1;
include_once "includes/base.php"; 
?>
<?php include_once "includes/header2.php"; ?>


<div id="smooth-wrapper">
    <div id="smooth-content">
        <!-- Page Wrapper -->
        <div class="contentWrapper">
            <section class="service-inquiry">
                <div class="container">
                    <div class="service-inquiry__wrapper" data-view="intro">

                        <aside class="side">
                            <div class="brand">REQUEST CARE</div>
                            <ol class="nav" id="nav" style="padding:0"></ol>
                            <div class="help"><b>Prefer to talk?</b>Call [PHONE NUMBER] during office hours and we'll fill this in with you.</div>
                            <div class="emerg">Not for emergencies — call 911.</div>
                        </aside>

                        <!-- 1) INTRO CARD -->
                        <div class="card card--intro">
                            <h2>Let’s find the right care, together.</h2>
                            <p>This short form tells us about the person who needs care. It takes about 5 to 10 minutes. If you’re not sure about something, you can leave it out — we’ll talk it through with you.</p>

                            <div class="intro-box">
                                <b>It helps to have:</b>
                                <ul>
                                    <li>Their name and address</li>
                                    <li>Your phone number</li>
                                    <li>A rough idea of the help they need</li>
                                </ul>
                            </div>

                            <p class="intro-note">Not for emergencies. If someone is unwell or in danger, call 911.</p>
                            <p class="intro-note">Your answers go securely to Inspire HCS and are only used to arrange care.</p>

                            <div class="intro-foot">
                                <button class="btn btn-primary" id="startBtn" type="button">Start</button>
                            </div>
                        </div>

                        <!-- 2) STEPS CARD (purana card, bas class add hui hai) -->
                        <div class="card card--steps">
                            <div class="card-head">
                            <div class="step-label" id="stepLabel"></div>
                            <div class="bar"><i id="barFill"></i></div>
                            <h1 id="title"></h1>
                            <p class="sub" id="subtitle"></p>
                            </div>

                            <div class="card-body" id="body">

                            <!-- ===== Har step ka content yahan add karo ===== -->
                            <section class="panel" data-step="1">
                                <!-- STEP 1: About you — apna content yahan -->
                            </section>
                            <section class="panel" data-step="2">
                                <!-- STEP 2: Who needs care -->
                            </section>
                            <section class="panel" data-step="3">
                                <!-- STEP 3: Their address -->
                            </section>
                            <section class="panel" data-step="4">
                                <!-- STEP 4: Help needed -->
                            </section>
                            <section class="panel" data-step="5">
                                <!-- STEP 5: Health & mobility -->
                            </section>
                            <section class="panel" data-step="6">
                                <!-- STEP 6: Support & paperwork -->
                            </section>
                            <section class="panel" data-step="7">
                                <!-- STEP 7: Timing & payment -->
                            </section>
                            <section class="panel" data-step="8">
                                <!-- STEP 8: Review & send -->
                            </section>

                            </div>

                            <div class="card-foot">
                            <button class="btn btn-ghost" id="backBtn" type="button">Back</button>
                            <span class="spacer"></span>
                            <button class="btn btn-primary" id="nextBtn" type="button">Continue</button>
                            </div>
                        </div>

                        <!-- 3) THANK YOU CARD -->
                        <div class="card card--thanks">
                            <div class="thanks-icon"></div>
                            <h2>Thank you, <span id="thanksName">there</span>. We’ve got your request.</h2>
                            <p class="thanks-copy">A copy has been sent to your email, if you gave one.</p>

                            <b class="thanks-sub">What happens next</b>
                            <ol class="thanks-steps">
                                <li><span>1</span>We read your request.</li>
                                <li><span>2</span>We call you to talk it through and explain the assessment.</li>
                                <li><span>3</span>We agree the plan, schedule and charges with you before care begins.</li>
                            </ol>

                            <div class="thanks-ref">
                                <small>Your reference</small>
                                <strong id="thanksRef">[SMARTCARE REFERENCE]</strong>
                            </div>

                            <p class="intro-note">Need to add something or change your mind? Call [PHONE NUMBER].</p>
                            <p class="intro-note">Not for emergencies — if someone is unwell or in danger, call 911.</p>

                            <div class="thanks-foot">
                                <a class="btn btn-primary" href="/">Back to the Inspire HCS website</a>
                                <button class="thanks-print" id="printBtn" type="button">Print a copy</button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


        </div>
         <?php include_once "includes/footer.php"; ?>
    </div>
</div>
<?php include_once "includes/scripts.php"; ?> 

<script>
const STEPS = [
  { nav:"About you",          short:"About you",          title:"First, a little about you.", sub:"So we know who to call back." },
  { nav:"Who needs care",     short:"Who needs care",     title:"Who needs care?",            sub:"Tell us about the person we'll be helping." },
  { nav:"Their address",      short:"Their address",      title:"Where will care take place?",sub:"Usually this is their home address." },
  { nav:"Help needed",        short:"Help needed",        title:"What help is needed?",       sub:"" },
  { nav:"Health & mobility",  short:"Health & mobility",  title:"Health and mobility",        sub:"" },
  { nav:"Support & paperwork",short:"Support & paperwork",title:"Support and paperwork",      sub:"" },
  { nav:"Timing & payment",   short:"Timing & payment",   title:"Timing and payment",         sub:"" },
  { nav:"Review & send",      short:"Review & send",      title:"Review and send",            sub:"Check everything before you send it." }
];

const validators = {};

/* ---------------- Setup ---------------- */
let current = 1;
const total = STEPS.length;
const $ = id => document.getElementById(id);
const nav = $("nav");
const wrapper = document.querySelector(".service-inquiry__wrapper");

/* Views: "intro" | "steps" | "thanks" */
function setView(view, scroll = true){
  wrapper.dataset.view = view;
  if(scroll) window.scrollTo({top:0, behavior:"smooth"});
}

/* ---------------- Nav build ---------------- */
STEPS.forEach((s,i)=>{
  const li = document.createElement("li");
  li.innerHTML = `<button type="button"><span class="dot"></span><span>${s.nav}</span></button>`;
  li.querySelector("button").addEventListener("click",()=>{
    if(li.classList.contains("done")) go(i+1);
  });
  nav.appendChild(li);
});

/* ---------------- Step change ---------------- */
function go(n, scroll = true){
  current = n;
  const s = STEPS[n-1];

  $("stepLabel").textContent = `Step ${n} of ${total} · ${s.short}`;
  $("barFill").style.width = (n/total*100)+"%";
  $("title").textContent = s.title;
  $("subtitle").textContent = s.sub;
  $("subtitle").hidden = !s.sub;

  document.querySelectorAll(".panel").forEach(p=>p.classList.toggle("show", +p.dataset.step===n));

  [...nav.children].forEach((li,i)=>{
    const step = i+1;
    li.classList.toggle("active", step===n);
    li.classList.toggle("done", step<n);
    li.querySelector(".dot").textContent = step<n ? "✓" : step;
    li.querySelector("button").setAttribute("aria-current", step===n ? "step" : "false");
  });

  $("backBtn").hidden = n===1;
  $("nextBtn").textContent = n===total ? "Send request" : "Continue";
  if(scroll) window.scrollTo({top:0, behavior:"smooth"});
}

/* ---------------- Submit: thank you card ---------------- */
function onSubmit(){

  [...nav.children].forEach(li=>{
    li.classList.remove("active");
    li.classList.add("done");
    li.querySelector(".dot").textContent = "✓";
  });

  // name thank you card mein (apni name field ki id lagao)
  const nameInput = document.querySelector("#fullName");
  if(nameInput && nameInput.value.trim()){
    $("thanksName").textContent = nameInput.value.trim().split(" ")[0];
  }

  // reference server se aaye to:
  // $("thanksRef").textContent = response.reference;

  setView("thanks");
}

/* ---------------- Buttons ---------------- */
$("startBtn").addEventListener("click", ()=>{
  go(1);
  setView("steps");
});

$("nextBtn").addEventListener("click", ()=>{
  const check = validators[current];
  if(check && !check()) return;
  if(current===total) onSubmit(); else go(current+1);
});

$("backBtn").addEventListener("click", ()=>{
  if(current>1) go(current-1);
});

$("printBtn").addEventListener("click", ()=> window.print());

/* ---------------- Init ---------------- */
go(1, false);
setView("intro", false);
</script>

</body>

</html>

