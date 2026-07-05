var Z=Object.defineProperty,_=Object.defineProperties;var ee=Object.getOwnPropertyDescriptors;var O=Object.getOwnPropertySymbols;var ae=Object.prototype.hasOwnProperty,ie=Object.prototype.propertyIsEnumerable;var B=(a,i,s)=>i in a?Z(a,i,{enumerable:!0,configurable:!0,writable:!0,value:s}):a[i]=s,N=(a,i)=>{for(var s in i||(i={}))ae.call(i,s)&&B(a,s,i[s]);if(O)for(var s of O(i))ie.call(i,s)&&B(a,s,i[s]);return a},M=(a,i)=>_(a,ee(i));import{r,j as e,m as k,A as se,a as te}from"./vendor-BClgSahe.js";const ne=[{code:"+1",flag:"🇺🇸",label:"US"},{code:"+44",flag:"🇬🇧",label:"UK"},{code:"+61",flag:"🇦🇺",label:"AU"},{code:"+91",flag:"🇮🇳",label:"IN"},{code:"+1-CA",flag:"🇨🇦",label:"CA"},{code:"+64",flag:"🇳🇿",label:"NZ"},{code:"+65",flag:"🇸🇬",label:"SG"},{code:"+971",flag:"🇦🇪",label:"AE"}],le=["6:00 AM","7:00 AM","8:00 AM","9:00 AM","10:00 AM","11:00 AM","12:00 PM","1:00 PM","2:00 PM","3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM","9:00 PM","10:00 PM","11:00 PM","12:00 AM","1:00 AM","2:00 AM","3:00 AM","4:00 AM","5:00 AM"],oe=["Essay Writing","Research Paper","Dissertation / Thesis","Case Study","Coursework","Literature Review","Book Report","Nursing","Law","MBA","History","Psychology","Sociology","English","Philosophy","Other"],re=["Python","Java","C / C++","JavaScript / TypeScript","Data Science","Machine Learning","Database / SQL","Mathematics","Statistics","Electrical Engineering","Mechanical Engineering","Civil Engineering","Physics","Chemistry","Accounting / Finance","Other"],ce=["Business / MBA","Computer Science","Nursing / Healthcare","Mathematics","English / Writing","History / Social Sciences","Psychology","Law","Accounting","Engineering","Science","Other"],de={Writing:"Essays, reports, dissertations, case studies & more — written by real academic experts.",Technical:"Coding, data science, math, engineering & science problems solved step-by-step.","Online Class":"We handle your entire online course, quizzes, discussions & assignments."},A=({text:a,icon:i})=>e.jsxs("span",{className:"mah-trust-badge",children:[e.jsx("span",{className:"mah-trust-icon",children:i}),a]}),he=({text:a})=>{const[i,s]=r.useState(!1);return e.jsxs("span",{className:"mah-info-icon",onMouseEnter:()=>s(!0),onMouseLeave:()=>s(!1),children:[e.jsxs("svg",{width:"14",height:"14",viewBox:"0 0 20 20",fill:"none",children:[e.jsx("circle",{cx:"10",cy:"10",r:"9",stroke:"#aaa",strokeWidth:"1.5"}),e.jsx("text",{x:"10",y:"15",textAnchor:"middle",fontSize:"12",fill:"#aaa",fontFamily:"sans-serif",children:"i"})]}),i&&e.jsx("span",{className:"mah-tooltip",children:a})]})},z=({countryCode:a,setCountryCode:i,phone:s,setPhone:c})=>e.jsxs("div",{className:"mah-phone-field",children:[e.jsx("select",{value:a,onChange:l=>i(l.target.value),className:"mah-phone-code-select",children:ne.map(l=>e.jsxs("option",{value:l.code,children:[l.flag," ",l.code]},l.code))}),e.jsx("div",{className:"mah-phone-divider"}),e.jsx("input",{type:"tel",placeholder:"Phone no.",value:s,onChange:l=>c(l.target.value),className:"mah-phone-input"})]}),G=({deadlineTime:a,setDeadlineTime:i,show:s,setShow:c})=>e.jsxs("div",{className:"mah-deadline-wrapper",children:[e.jsxs("div",{className:"mah-deadline-box",onClick:()=>c(!s),children:[e.jsx("span",{className:"mah-deadline-label",children:"Deadline"}),e.jsxs("button",{type:"button",className:"mah-deadline-select",children:[e.jsx("span",{children:a}),e.jsx("svg",{width:"16",height:"16",viewBox:"0 0 20 20",fill:"none",children:e.jsx("path",{d:"M5 7.5L10 12.5L15 7.5",stroke:"#555",strokeWidth:"1.6",strokeLinecap:"round",strokeLinejoin:"round"})})]})]}),s&&e.jsx("div",{className:"mah-deadline-dropdown",children:le.map(l=>e.jsx("button",{type:"button",className:`mah-deadline-option ${l===a?"mah-deadline-option-active":""}`,onClick:()=>{i(l),c(!1)},children:l},l))})]}),pe=({pages:a,setPages:i})=>e.jsxs("div",{className:"mah-pages-wrapper",children:[e.jsx("span",{className:"mah-pages-label",children:"Pages"}),e.jsxs("div",{className:"mah-pages-counter",children:[e.jsx("button",{type:"button",onClick:()=>i(Math.max(1,a-1)),className:"mah-pages-btn",children:"−"}),e.jsx("span",{className:"mah-pages-count",children:a}),e.jsx("button",{type:"button",onClick:()=>i(a+1),className:"mah-pages-btn",children:"+"}),e.jsxs("span",{className:"mah-pages-words",children:[a*250," words"]})]})]}),E=({description:a,setDescription:i,attachedFiles:s,onAttach:c,fileInputRef:l})=>e.jsxs("div",{className:"mah-desc-box",children:[e.jsx("textarea",{placeholder:"Description (Write/Attach)",value:a,onChange:d=>i(d.target.value),className:"mah-textarea",rows:5}),e.jsxs("div",{className:"mah-attach-row",children:[e.jsxs("button",{type:"button",onClick:c,className:"mah-attach-btn",children:[e.jsx("svg",{width:"15",height:"15",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor",strokeWidth:"2",children:e.jsx("path",{d:"M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"})}),"Attach file"]}),s.length>0&&e.jsxs("span",{className:"mah-files-count",children:[s.length," file(s)"]})]})]}),me=({email:a,setEmail:i,countryCode:s,setCountryCode:c,phone:l,setPhone:d,subject:g,setSubject:x,description:u,setDescription:h,deadlineTime:b,setDeadlineTime:p,showDeadline:j,setShowDeadline:v,pages:w,setPages:f,attachedFiles:y,onAttach:o,fileInputRef:m})=>e.jsxs(e.Fragment,{children:[e.jsxs("div",{className:"mah-field-row",children:[e.jsx("div",{className:"mah-field mah-field-half",children:e.jsx("input",{type:"email",required:!0,placeholder:"Email",value:a,onChange:n=>i(n.target.value),className:"mah-input"})}),e.jsx("div",{className:"mah-field mah-field-half",children:e.jsx(z,{countryCode:s,setCountryCode:c,phone:l,setPhone:d})})]}),e.jsxs("div",{className:"mah-field-row mah-field-row-describe",children:[e.jsxs("div",{className:"mah-field-left-half",children:[e.jsxs("select",{value:g,onChange:n=>x(n.target.value),className:"mah-input mah-select",children:[e.jsx("option",{value:"",children:"Subject/Course Code"}),oe.map(n=>e.jsx("option",{value:n,children:n},n))]}),e.jsx(G,{deadlineTime:b,setDeadlineTime:p,show:j,setShow:v}),e.jsx(pe,{pages:w,setPages:f})]}),e.jsx("div",{className:"mah-field-right-half",children:e.jsx(E,{description:u,setDescription:h,attachedFiles:y,onAttach:o,fileInputRef:m})})]})]}),xe=({email:a,setEmail:i,countryCode:s,setCountryCode:c,phone:l,setPhone:d,subject:g,setSubject:x,description:u,setDescription:h,deadlineTime:b,setDeadlineTime:p,showDeadline:j,setShowDeadline:v,attachedFiles:w,onAttach:f,fileInputRef:y,difficulty:o,setDifficulty:m})=>e.jsxs(e.Fragment,{children:[e.jsxs("div",{className:"mah-field-row",children:[e.jsx("div",{className:"mah-field mah-field-half",children:e.jsx("input",{type:"email",required:!0,placeholder:"Email",value:a,onChange:n=>i(n.target.value),className:"mah-input"})}),e.jsx("div",{className:"mah-field mah-field-half",children:e.jsx(z,{countryCode:s,setCountryCode:c,phone:l,setPhone:d})})]}),e.jsxs("div",{className:"mah-field-row",children:[e.jsx("div",{className:"mah-field mah-field-half",children:e.jsxs("select",{value:g,onChange:n=>x(n.target.value),className:"mah-input mah-select",children:[e.jsx("option",{value:"",children:"Select Technology/Subject"}),re.map(n=>e.jsx("option",{value:n,children:n},n))]})}),e.jsx("div",{className:"mah-field mah-field-half",children:e.jsxs("select",{value:o,onChange:n=>m(n.target.value),className:"mah-input mah-select",children:[e.jsx("option",{value:"",children:"Difficulty Level"}),e.jsx("option",{value:"Beginner",children:"Beginner / Undergraduate"}),e.jsx("option",{value:"Intermediate",children:"Intermediate / Graduate"}),e.jsx("option",{value:"Advanced",children:"Advanced / PhD Level"})]})})]}),e.jsxs("div",{className:"mah-field-row mah-field-row-describe",children:[e.jsxs("div",{className:"mah-field-left-half",children:[e.jsx(G,{deadlineTime:b,setDeadlineTime:p,show:j,setShow:v}),e.jsxs("div",{className:"mah-pages-wrapper",children:[e.jsx("span",{className:"mah-pages-label",children:"Delivery Format"}),e.jsx("div",{className:"mah-delivery-options",children:["Code Only","Code + Report","Code + Explanation"].map(n=>e.jsxs("label",{className:"mah-delivery-option",children:[e.jsx("input",{type:"radio",name:"deliveryFormat",value:n,defaultChecked:n==="Code Only",className:"mah-radio-input"}),e.jsx("span",{className:"mah-delivery-label",children:n})]},n))})]})]}),e.jsx("div",{className:"mah-field-right-half",children:e.jsx(E,{description:u,setDescription:h,attachedFiles:w,onAttach:f,fileInputRef:y})})]})]}),fe=({email:a,setEmail:i,countryCode:s,setCountryCode:c,phone:l,setPhone:d,subject:g,setSubject:x,description:u,setDescription:h,attachedFiles:b,onAttach:p,fileInputRef:j,classUrl:v,setClassUrl:w,classDuration:f,setClassDuration:y})=>e.jsxs(e.Fragment,{children:[e.jsxs("div",{className:"mah-field-row",children:[e.jsx("div",{className:"mah-field mah-field-half",children:e.jsx("input",{type:"email",required:!0,placeholder:"Email",value:a,onChange:o=>i(o.target.value),className:"mah-input"})}),e.jsx("div",{className:"mah-field mah-field-half",children:e.jsx(z,{countryCode:s,setCountryCode:c,phone:l,setPhone:d})})]}),e.jsxs("div",{className:"mah-field-row",children:[e.jsx("div",{className:"mah-field mah-field-half",children:e.jsxs("select",{value:g,onChange:o=>x(o.target.value),className:"mah-input mah-select",children:[e.jsx("option",{value:"",children:"Course/Subject Name"}),ce.map(o=>e.jsx("option",{value:o,children:o},o))]})}),e.jsx("div",{className:"mah-field mah-field-half",children:e.jsxs("select",{value:f,onChange:o=>y(o.target.value),className:"mah-input mah-select",children:[e.jsx("option",{value:"",children:"Class Duration"}),e.jsx("option",{value:"1 Week",children:"1 Week"}),e.jsx("option",{value:"2 Weeks",children:"2 Weeks"}),e.jsx("option",{value:"1 Month",children:"1 Month"}),e.jsx("option",{value:"2 Months",children:"2 Months"}),e.jsx("option",{value:"Full Semester",children:"Full Semester"}),e.jsx("option",{value:"Full Year",children:"Full Year"})]})})]}),e.jsxs("div",{className:"mah-field-row mah-field-row-describe",children:[e.jsxs("div",{className:"mah-field-left-half",children:[e.jsx("input",{type:"url",placeholder:"Course Platform URL (optional)",value:v,onChange:o=>w(o.target.value),className:"mah-input"}),e.jsxs("div",{className:"mah-pages-wrapper",children:[e.jsx("span",{className:"mah-pages-label",children:"What needs to be done?"}),e.jsx("div",{className:"mah-checklist",children:["Weekly Assignments","Quizzes & Tests","Discussion Posts","Final Exam","Everything"].map(o=>e.jsxs("label",{className:"mah-checklist-item",children:[e.jsx("input",{type:"checkbox",className:"mah-check-input",defaultChecked:o==="Everything"}),e.jsx("span",{children:o})]},o))})]})]}),e.jsx("div",{className:"mah-field-right-half",children:e.jsx(E,{description:u,setDescription:h,attachedFiles:b,onAttach:p,fileInputRef:j})})]})]});function ge(){const[a,i]=r.useState("Writing"),[s,c]=r.useState(""),[l,d]=r.useState("+1"),[g,x]=r.useState(""),[u,h]=r.useState(""),[b,p]=r.useState(""),[j,v]=r.useState("2:00 AM"),[w,f]=r.useState(1),[y,o]=r.useState([]),[m,n]=r.useState(!1),[U,P]=r.useState(!1),[T,D]=r.useState(!1),[q,F]=r.useState(!1),[Y,R]=r.useState(""),[K,L]=r.useState(""),[$,I]=r.useState(""),C=r.useRef(null),W=t=>{i(t),h(""),p(""),F(!1)},V=t=>{t.target.files&&o(X=>[...X,...Array.from(t.target.files)])},J=t=>{t.preventDefault(),!(!m||!s)&&(D(!0),setTimeout(()=>{D(!1),P(!0)},1800))},Q=()=>{P(!1),c(""),x(""),h(""),p(""),n(!1),o([]),R(""),L(""),I(""),f(1)},S={email:s,setEmail:c,countryCode:l,setCountryCode:d,phone:g,setPhone:x,subject:u,setSubject:h,description:b,setDescription:p,deadlineTime:j,setDeadlineTime:v,showDeadline:q,setShowDeadline:F,pages:w,setPages:f,attachedFiles:y,onAttach:()=>{var t;return(t=C.current)==null?void 0:t.click()},fileInputRef:C};return e.jsxs("section",{className:"mah-hero-section",children:[e.jsx("div",{className:"mah-hero-bg"}),e.jsxs("div",{className:"mah-hero-container",children:[e.jsxs(k.div,{className:"mah-left-col",initial:{opacity:0,x:-30},animate:{opacity:1,x:0},transition:{duration:.7},children:[e.jsxs("div",{className:"mah-live-badge",children:[e.jsx("span",{className:"mah-live-dot"}),e.jsx("span",{children:"USA-Based Experts • Live Now"})]}),e.jsxs("h1",{className:"mah-hero-h1",children:["AI-Free Assignment Help from"," ",e.jsx("span",{className:"mah-h1-highlight",children:"Real Experts"})," to Do My Assignment"]}),e.jsxs("p",{className:"mah-hero-subtext",children:["Get expert help in"," ",e.jsx("span",{className:"mah-subtext-highlight",children:"any subject"})," ","— Delivered plagiarism-free before your deadline."]}),e.jsxs("div",{className:"mah-stats-row",children:[e.jsxs("div",{className:"mah-stat",children:[e.jsx("span",{className:"mah-stat-num",children:"50K+"}),e.jsx("span",{className:"mah-stat-label",children:"Orders Completed"})]}),e.jsx("div",{className:"mah-stat-divider"}),e.jsxs("div",{className:"mah-stat",children:[e.jsx("span",{className:"mah-stat-num",children:"4.9★"}),e.jsx("span",{className:"mah-stat-label",children:"Average Rating"})]}),e.jsx("div",{className:"mah-stat-divider"}),e.jsxs("div",{className:"mah-stat",children:[e.jsx("span",{className:"mah-stat-num",children:"500+"}),e.jsx("span",{className:"mah-stat-label",children:"PhD Experts"})]})]}),e.jsx("ul",{className:"mah-feature-list",children:["Guaranteed Grade or Refund","100% AI-Free Content","24/7 Live Support","Free Turnitin Report","On-Time Delivery Promise"].map(t=>e.jsxs("li",{className:"mah-feature-item",children:[e.jsx("span",{className:"mah-check-icon",children:"✓"}),t]},t))}),e.jsxs("div",{className:"mah-universities",children:[e.jsx("span",{className:"mah-uni-label",children:"Trusted by students at:"}),e.jsx("div",{className:"mah-uni-logos",children:["Harvard","MIT","Stanford","Oxford","Yale"].map(t=>e.jsx("span",{className:"mah-uni-tag",children:t},t))})]})]}),e.jsx(k.div,{className:"mah-right-col",initial:{opacity:0,y:30},animate:{opacity:1,y:0},transition:{duration:.6,delay:.2},children:e.jsx("div",{className:"mah-form-card",children:U?e.jsxs(k.div,{initial:{scale:.9,opacity:0},animate:{scale:1,opacity:1},className:"mah-success-card",children:[e.jsx("div",{className:"mah-success-icon",children:"✓"}),e.jsx("h3",{className:"mah-success-title",children:"Request Received!"}),e.jsxs("p",{className:"mah-success-text",children:["We've received your ",e.jsx("strong",{children:a})," request. An expert will contact you at ",e.jsx("strong",{children:s})," within minutes."]}),e.jsx("button",{type:"button",onClick:Q,className:"mah-reset-btn",children:"Submit Another Request"})]}):e.jsxs("form",{onSubmit:J,className:"mah-form",children:[e.jsxs("div",{className:"mah-form-header",children:[e.jsx("h2",{className:"mah-form-title",children:"AI-Free Assignment Help from Real Experts to Do My Assignment"}),e.jsxs("div",{className:"mah-trust-row",children:[e.jsx(A,{icon:"✓",text:"Guaranteed Grade or Refund"}),e.jsx(A,{icon:"✓",text:"No AI"}),e.jsx(A,{icon:"✓",text:"24/7 Support"})]})]}),e.jsx("div",{className:"mah-service-row",children:["Writing","Technical","Online Class"].map(t=>e.jsxs("label",{className:`mah-service-radio ${a===t?"mah-service-radio-active":""}`,onClick:()=>W(t),children:[e.jsx("input",{type:"radio",name:"serviceType",value:t,checked:a===t,onChange:()=>W(t),className:"mah-radio-input"}),e.jsx("span",{className:`mah-radio-dot ${a===t?"mah-radio-checked":""}`}),e.jsx("span",{className:"mah-radio-label",children:t}),e.jsx(he,{text:de[t]})]},t))}),e.jsx(se,{mode:"wait",children:e.jsxs(k.div,{initial:{opacity:0,y:10},animate:{opacity:1,y:0},exit:{opacity:0,y:-10},transition:{duration:.22},className:"mah-fields-block",children:[a==="Writing"&&e.jsx(me,N({},S)),a==="Technical"&&e.jsx(xe,M(N({},S),{difficulty:Y,setDifficulty:R})),a==="Online Class"&&e.jsx(fe,M(N({},S),{classUrl:K,setClassUrl:L,classDuration:$,setClassDuration:I}))]},a)}),e.jsx("input",{ref:C,type:"file",multiple:!0,onChange:V,className:"mah-file-input-hidden"}),e.jsxs("label",{className:"mah-terms-row",children:[e.jsx("div",{className:`mah-checkbox ${m?"mah-checkbox-checked":""}`,onClick:()=>n(t=>!t),children:m&&e.jsx("svg",{width:"12",height:"10",viewBox:"0 0 12 10",fill:"none",children:e.jsx("path",{d:"M1 5L4.5 8.5L11 1.5",stroke:"white",strokeWidth:"2",strokeLinecap:"round",strokeLinejoin:"round"})})}),e.jsx("input",{type:"checkbox",hidden:!0,checked:m,onChange:()=>n(t=>!t)}),e.jsx("span",{className:"mah-terms-text",children:"I accept the T&C, agree to receive offers & updates"})]}),e.jsx("button",{type:"submit",disabled:!m||!s||T,className:"mah-submit-btn",children:T?e.jsxs("span",{className:"mah-submitting",children:[e.jsx("svg",{className:"mah-spinner",width:"18",height:"18",viewBox:"0 0 24 24",fill:"none",stroke:"white",strokeWidth:"2.5",children:e.jsx("path",{d:"M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"})}),"Submitting Request..."]}):a==="Writing"?"Get Writing Help Now →":a==="Technical"?"Get Technical Help Now →":"Get Class Help Now →"})]})})})]}),e.jsx("style",{children:`
                .mah-hero-section {
                    position: relative;
                    min-height: 100vh;
                    background: linear-gradient(135deg, #f5f0e8 0%, #fdf8f0 40%, #f9f4ec 100%);
                    display: flex;
                    align-items: center;
                    padding: 100px 0 60px;
                    overflow: hidden;
                    font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
                }
                .mah-hero-bg {
                    position: absolute; inset: 0;
                    background:
                        radial-gradient(ellipse 60% 50% at 10% 50%, rgba(255,200,120,0.18) 0%, transparent 70%),
                        radial-gradient(ellipse 50% 40% at 90% 20%, rgba(255,230,170,0.14) 0%, transparent 70%);
                    pointer-events: none; z-index: 0;
                }
                .mah-hero-container {
                    position: relative; z-index: 1;
                    max-width: 1280px; margin: 0 auto; padding: 0 24px;
                    display: flex; align-items: flex-start; gap: 48px; width: 100%;
                }

                /* LEFT */
                .mah-left-col {
                    flex: 1 1 0; min-width: 0;
                    display: flex; flex-direction: column; gap: 24px; padding-top: 20px;
                }
                .mah-live-badge {
                    display: inline-flex; align-items: center; gap: 8px;
                    background: rgba(255,255,255,0.85); border: 1px solid rgba(0,0,0,0.08);
                    border-radius: 50px; padding: 6px 16px; font-size: 12px; font-weight: 700;
                    color: #2c2c2c; backdrop-filter: blur(8px); width: fit-content;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.05); letter-spacing: 0.02em;
                }
                .mah-live-dot {
                    width: 8px; height: 8px; border-radius: 50%; background: #22c55e;
                    box-shadow: 0 0 0 3px rgba(34,197,94,0.25); animation: mahPulse 2s infinite;
                }
                @keyframes mahPulse {
                    0%, 100% { box-shadow: 0 0 0 3px rgba(34,197,94,0.25); }
                    50% { box-shadow: 0 0 0 6px rgba(34,197,94,0.1); }
                }
                .mah-hero-h1 {
                    font-size: clamp(24px, 3.2vw, 42px); font-weight: 800;
                    line-height: 1.25; color: #1a1a1a; margin: 0; letter-spacing: -0.02em;
                }
                .mah-h1-highlight { color: #f16700; }
                .mah-hero-subtext { font-size: 15px; color: #555; margin: 0; line-height: 1.6; }
                .mah-subtext-highlight { color: #f16700; font-weight: 700; }
                .mah-stats-row { display: flex; align-items: center; gap: 20px; flex-wrap: wrap; }
                .mah-stat { display: flex; flex-direction: column; align-items: center; }
                .mah-stat-num { font-size: 22px; font-weight: 800; color: #1a1a1a; letter-spacing: -0.02em; }
                .mah-stat-label { font-size: 11px; color: #888; font-weight: 500; margin-top: 1px; }
                .mah-stat-divider { width: 1px; height: 40px; background: #e0d9d0; }
                .mah-feature-list { list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; gap: 10px; }
                .mah-feature-item { display: flex; align-items: center; gap: 10px; font-size: 14px; font-weight: 500; color: #333; }
                .mah-check-icon {
                    width: 22px; height: 22px; background: #f16700; border-radius: 50%;
                    display: flex; align-items: center; justify-content: center;
                    color: white; font-size: 12px; font-weight: 800; flex-shrink: 0;
                }
                .mah-universities { display: flex; flex-direction: column; gap: 10px; margin-top: 4px; }
                .mah-uni-label { font-size: 11px; color: #999; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; }
                .mah-uni-logos { display: flex; flex-wrap: wrap; gap: 8px; }
                .mah-uni-tag {
                    background: rgba(255,255,255,0.8); border: 1px solid #e8e0d5;
                    border-radius: 6px; padding: 5px 12px; font-size: 12px; font-weight: 700; color: #444;
                }

                /* RIGHT */
                .mah-right-col { flex: 0 0 490px; max-width: 490px; }
                .mah-form-card {
                    background: #ffffff; border-radius: 20px;
                    box-shadow: 0 8px 50px rgba(0,0,0,0.12), 0 2px 15px rgba(0,0,0,0.06);
                    padding: 26px; border: 1px solid rgba(0,0,0,0.05);
                    position: relative; overflow: hidden;
                }
                .mah-form-card::before {
                    content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px;
                    background: linear-gradient(90deg, #f16700, #ff9a00, #f16700);
                    background-size: 200% 100%; animation: mahShimmer 3s infinite linear;
                }
                @keyframes mahShimmer {
                    0% { background-position: 0% 0%; } 100% { background-position: 200% 0%; }
                }

                /* FORM */
                .mah-form { display: flex; flex-direction: column; gap: 13px; }
                .mah-form-header { display: flex; flex-direction: column; gap: 10px; }
                .mah-form-title {
                    font-size: 17px; font-weight: 800; color: #1a1a1a;
                    line-height: 1.35; margin: 0; text-align: center;
                }
                .mah-trust-row { display: flex; align-items: center; justify-content: center; gap: 12px; flex-wrap: wrap; }
                .mah-trust-badge { display: flex; align-items: center; gap: 4px; font-size: 11px; font-weight: 600; color: #444; }
                .mah-trust-icon { color: #22c55e; font-weight: 800; font-size: 13px; }

                /* SERVICE RADIOS */
                .mah-service-row { display: flex; align-items: center; gap: 16px; flex-wrap: wrap; border-top: 1px solid #f0f0f0; border-bottom: 1px solid #f0f0f0; padding: 10px 0; }
                .mah-service-radio {
                    display: flex; align-items: center; gap: 6px; cursor: pointer;
                    font-size: 13.5px; font-weight: 600; color: #666;
                    transition: color 0.2s; position: relative; user-select: none;
                }
                .mah-service-radio-active { color: #f16700; }
                .mah-radio-input { display: none; }
                .mah-radio-dot {
                    width: 18px; height: 18px; border: 2px solid #bbb; border-radius: 50%;
                    display: inline-flex; align-items: center; justify-content: center;
                    flex-shrink: 0; transition: border-color 0.2s; background: #fff; position: relative;
                }
                .mah-radio-checked { border-color: #f16700; }
                .mah-radio-checked::after {
                    content: ''; width: 8px; height: 8px; border-radius: 50%;
                    background: #f16700; display: block;
                }
                .mah-info-icon { position: relative; display: inline-flex; align-items: center; cursor: help; margin-left: 1px; }
                .mah-tooltip {
                    position: absolute; bottom: calc(100% + 8px); left: 50%; transform: translateX(-50%);
                    background: #2c2c2c; color: white; font-size: 11px; padding: 8px 10px;
                    border-radius: 8px; white-space: pre-line; z-index: 200;
                    pointer-events: none; min-width: 200px;
                    box-shadow: 0 4px 15px rgba(0,0,0,0.3); line-height: 1.5;
                }

                /* FIELDS BLOCK */
                .mah-fields-block { display: flex; flex-direction: column; gap: 10px; }
                .mah-field-row { display: flex; gap: 10px; }
                .mah-field { display: flex; flex-direction: column; }
                .mah-field-half { flex: 1 1 0; min-width: 0; }
                .mah-field-row-describe { align-items: flex-start; }
                .mah-field-left-half { flex: 1 1 0; min-width: 0; display: flex; flex-direction: column; gap: 10px; }
                .mah-field-right-half { flex: 1 1 0; min-width: 0; }

                /* INPUTS */
                .mah-input {
                    width: 100%; padding: 10px 13px; border: 1.5px solid #e8e8e8;
                    border-radius: 10px; font-size: 13px; font-family: inherit; color: #333;
                    background: #f9f9f9; transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
                    outline: none; box-sizing: border-box; height: 42px;
                }
                .mah-input:focus { border-color: #f16700; background: #fff; box-shadow: 0 0 0 3px rgba(241,103,0,0.1); }
                .mah-input::placeholder { color: #aaa; }
                .mah-select { appearance: none; -webkit-appearance: none; cursor: pointer;
                    background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L6 7L11 1' stroke='%23888' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
                    background-repeat: no-repeat; background-position: right 12px center; padding-right: 32px;
                }

                /* PHONE */
                .mah-phone-field {
                    display: flex; align-items: center; border: 1.5px solid #e8e8e8;
                    border-radius: 10px; background: #f9f9f9; overflow: hidden;
                    transition: border-color 0.2s, box-shadow 0.2s; height: 42px;
                }
                .mah-phone-field:focus-within { border-color: #f16700; background: #fff; box-shadow: 0 0 0 3px rgba(241,103,0,0.1); }
                .mah-phone-code-select { border: none; background: transparent; padding: 0 4px 0 10px; font-size: 12px; font-family: inherit; color: #333; outline: none; cursor: pointer; min-width: 74px; }
                .mah-phone-divider { width: 1px; height: 22px; background: #ddd; flex-shrink: 0; }
                .mah-phone-input { flex: 1; border: none; background: transparent; padding: 0 12px; font-size: 13px; font-family: inherit; color: #333; outline: none; min-width: 0; }
                .mah-phone-input::placeholder { color: #aaa; }

                /* DEADLINE */
                .mah-deadline-wrapper { position: relative; }
                .mah-deadline-box {
                    display: flex; align-items: center; justify-content: space-between;
                    border: 1.5px solid #e8e8e8; border-radius: 10px; background: #f9f9f9;
                    padding: 0 13px; height: 42px; cursor: pointer;
                    transition: border-color 0.2s;
                }
                .mah-deadline-box:hover { border-color: #f16700; }
                .mah-deadline-label { font-size: 13px; font-weight: 600; color: #888; }
                .mah-deadline-select {
                    display: flex; align-items: center; gap: 4px; background: none; border: none;
                    font-size: 13px; font-weight: 600; color: #333; cursor: pointer; font-family: inherit; padding: 0;
                }
                .mah-deadline-dropdown {
                    position: absolute; top: calc(100% + 4px); left: 0; right: 0;
                    background: #fff; border: 1.5px solid #e8e8e8; border-radius: 10px;
                    box-shadow: 0 8px 24px rgba(0,0,0,0.12); z-index: 100;
                    max-height: 200px; overflow-y: auto; padding: 4px;
                }
                .mah-deadline-option {
                    display: block; width: 100%; text-align: left; padding: 7px 12px;
                    font-size: 13px; font-family: inherit; color: #333; background: none;
                    border: none; border-radius: 6px; cursor: pointer; transition: background 0.12s;
                }
                .mah-deadline-option:hover { background: #fff5ed; }
                .mah-deadline-option-active { background: #fff5ed; color: #f16700; font-weight: 700; }

                /* PAGES */
                .mah-pages-wrapper { border: 1.5px solid #e8e8e8; border-radius: 10px; background: #f9f9f9; padding: 8px 13px; display: flex; flex-direction: column; gap: 5px; }
                .mah-pages-label { font-size: 10px; font-weight: 700; color: #aaa; text-transform: uppercase; letter-spacing: 0.05em; }
                .mah-pages-counter { display: flex; align-items: center; gap: 8px; }
                .mah-pages-btn {
                    width: 26px; height: 26px; border: 1.5px solid #ddd; border-radius: 6px;
                    background: #fff; color: #444; font-size: 15px; font-weight: 700; cursor: pointer;
                    display: flex; align-items: center; justify-content: center; transition: all 0.15s; padding: 0;
                }
                .mah-pages-btn:hover { background: #f16700; border-color: #f16700; color: white; }
                .mah-pages-count { font-size: 15px; font-weight: 800; color: #1a1a1a; min-width: 20px; text-align: center; }
                .mah-pages-words { font-size: 12px; color: #999; font-weight: 500; }

                /* DELIVERY FORMAT (Technical) */
                .mah-delivery-options { display: flex; flex-direction: column; gap: 6px; }
                .mah-delivery-option { display: flex; align-items: center; gap: 7px; cursor: pointer; font-size: 13px; color: #444; }
                .mah-delivery-label { user-select: none; }

                /* CHECKLIST (Online Class) */
                .mah-checklist { display: flex; flex-direction: column; gap: 6px; }
                .mah-checklist-item { display: flex; align-items: center; gap: 8px; font-size: 13px; color: #444; cursor: pointer; }
                .mah-check-input { accent-color: #f16700; width: 15px; height: 15px; cursor: pointer; }

                /* DESCRIPTION */
                .mah-desc-box {
                    border: 1.5px solid #e8e8e8; border-radius: 10px; background: #f9f9f9;
                    overflow: hidden; display: flex; flex-direction: column;
                    transition: border-color 0.2s, box-shadow 0.2s; height: 100%;
                }
                .mah-desc-box:focus-within { border-color: #f16700; background: #fff; box-shadow: 0 0 0 3px rgba(241,103,0,0.1); }
                .mah-textarea {
                    flex: 1; border: none; background: transparent; resize: none;
                    font-size: 13px; font-family: inherit; color: #333;
                    padding: 11px 13px; outline: none; line-height: 1.5; min-height: 100px;
                }
                .mah-textarea::placeholder { color: #aaa; }
                .mah-attach-row {
                    display: flex; align-items: center; gap: 10px; padding: 7px 12px;
                    border-top: 1px solid #efefef; background: #fafafa;
                }
                .mah-attach-btn {
                    display: flex; align-items: center; gap: 6px; background: none;
                    border: none; font-size: 12px; font-weight: 700; color: #555;
                    cursor: pointer; font-family: inherit; padding: 0; transition: color 0.2s;
                }
                .mah-attach-btn:hover { color: #f16700; }
                .mah-file-input-hidden { display: none; }
                .mah-files-count { font-size: 11px; color: #f16700; font-weight: 700; background: #fff5ed; padding: 2px 8px; border-radius: 20px; }

                /* T&C */
                .mah-terms-row { display: flex; align-items: flex-start; gap: 10px; cursor: pointer; }
                .mah-checkbox {
                    width: 20px; height: 20px; border: 2px solid #ccc; border-radius: 4px;
                    display: flex; align-items: center; justify-content: center;
                    flex-shrink: 0; transition: all 0.15s; background: white; margin-top: 1px;
                }
                .mah-checkbox-checked { background: #2c2c2c; border-color: #2c2c2c; }
                .mah-terms-text { font-size: 12px; color: #666; font-weight: 500; line-height: 1.4; user-select: none; }

                /* SUBMIT */
                .mah-submit-btn {
                    width: 100%; padding: 14px 24px;
                    background: linear-gradient(135deg, #f16700, #ff8c00);
                    color: white; font-size: 14.5px; font-weight: 800; font-family: inherit;
                    border: none; border-radius: 12px; cursor: pointer; transition: all 0.25s;
                    letter-spacing: 0.02em; box-shadow: 0 4px 20px rgba(241,103,0,0.35);
                }
                .mah-submit-btn:hover:not(:disabled) { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(241,103,0,0.45); }
                .mah-submit-btn:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }
                .mah-submitting { display: flex; align-items: center; justify-content: center; gap: 8px; }
                .mah-spinner { animation: mahSpin 1s linear infinite; }
                @keyframes mahSpin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

                /* SUCCESS */
                .mah-success-card { display: flex; flex-direction: column; align-items: center; text-align: center; padding: 40px 20px; gap: 16px; }
                .mah-success-icon {
                    width: 72px; height: 72px; background: linear-gradient(135deg, #22c55e, #16a34a);
                    border-radius: 50%; display: flex; align-items: center; justify-content: center;
                    font-size: 32px; color: white; font-weight: 800; box-shadow: 0 8px 24px rgba(34,197,94,0.3);
                }
                .mah-success-title { font-size: 22px; font-weight: 800; color: #1a1a1a; margin: 0; }
                .mah-success-text { font-size: 14px; color: #666; line-height: 1.6; margin: 0; max-width: 320px; }
                .mah-reset-btn {
                    margin-top: 8px; padding: 10px 24px;
                    background: #f9f9f9; border: 1.5px solid #e8e8e8; border-radius: 10px;
                    font-size: 13.5px; font-weight: 700; color: #555; cursor: pointer; font-family: inherit; transition: all 0.2s;
                }
                .mah-reset-btn:hover { background: #fff5ed; border-color: #f16700; color: #f16700; }

                /* RESPONSIVE */
                @media (max-width: 1024px) {
                    .mah-hero-container { flex-direction: column; align-items: center; gap: 36px; }
                    .mah-right-col { flex: unset; max-width: 100%; width: 100%; }
                    .mah-left-col { text-align: center; align-items: center; }
                    .mah-feature-list { align-items: flex-start; text-align: left; }
                }
                @media (max-width: 600px) {
                    .mah-hero-section { padding: 90px 0 40px; }
                    .mah-field-row { flex-direction: column; }
                    .mah-field-row-describe { flex-direction: column; }
                    .mah-field-left-half, .mah-field-right-half { width: 100%; }
                    .mah-form-card { padding: 18px; }
                    .mah-trust-row { gap: 8px; }
                    .mah-service-row { gap: 10px; }
                    .mah-stats-row { justify-content: center; }
                }
            `})]})}const H=document.getElementById("creative-hero-root");H&&te.createRoot(H).render(e.jsx(ge,{}));
