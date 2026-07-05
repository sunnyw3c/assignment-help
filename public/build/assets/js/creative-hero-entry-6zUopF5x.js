var te=Object.defineProperty,ie=Object.defineProperties;var se=Object.getOwnPropertyDescriptors;var D=Object.getOwnPropertySymbols;var ne=Object.prototype.hasOwnProperty,oe=Object.prototype.propertyIsEnumerable;var L=(i,a,o)=>a in i?te(i,a,{enumerable:!0,configurable:!0,writable:!0,value:o}):i[a]=o,c=(i,a)=>{for(var o in a||(a={}))ne.call(a,o)&&L(i,o,a[o]);if(D)for(var o of D(a))oe.call(a,o)&&L(i,o,a[o]);return i},b=(i,a)=>ie(i,se(a));import{r,j as e,m,R as re,A as le,a as de}from"./vendor-BClgSahe.js";const ce=[{code:"+1",flag:"🇺🇸",label:"US"},{code:"+44",flag:"🇬🇧",label:"UK"},{code:"+61",flag:"🇦🇺",label:"AU"},{code:"+91",flag:"🇮🇳",label:"IN"},{code:"+1-CA",flag:"🇨🇦",label:"CA"},{code:"+64",flag:"🇳🇿",label:"NZ"},{code:"+65",flag:"🇸🇬",label:"SG"},{code:"+971",flag:"🇦🇪",label:"AE"}],he=["6:00 AM","7:00 AM","8:00 AM","9:00 AM","10:00 AM","11:00 AM","12:00 PM","1:00 PM","2:00 PM","3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM","9:00 PM","10:00 PM","11:00 PM","12:00 AM","1:00 AM","2:00 AM","3:00 AM","4:00 AM","5:00 AM"],pe=["Essay Writing","Research Paper","Dissertation / Thesis","Case Study","Coursework","Literature Review","Book Report","Nursing","Law","MBA","History","Psychology","Sociology","English","Philosophy","Other"],me=["Python","Java","C / C++","JavaScript / TypeScript","Data Science","Machine Learning","Database / SQL","Mathematics","Statistics","Electrical Engineering","Mechanical Engineering","Civil Engineering","Physics","Chemistry","Accounting / Finance","Other"],xe=["Business / MBA","Computer Science","Nursing / Healthcare","Mathematics","English / Writing","History / Social Sciences","Psychology","Law","Accounting","Engineering","Science","Other"],ge={Writing:"Essays, reports, dissertations, case studies & more — written by real academic experts.",Technical:"Coding, data science, math, engineering & science problems solved step-by-step.","Online Class":"We handle your entire online course, quizzes, discussions & assignments."};function fe(){const[i,a]=r.useState(()=>typeof document!="undefined"&&document.documentElement.classList.contains("dark"));return r.useEffect(()=>{const o=document.documentElement,d=new MutationObserver(()=>a(o.classList.contains("dark")));return d.observe(o,{attributes:!0,attributeFilter:["class"]}),()=>d.disconnect()},[]),i}const ue=({text:i})=>{const[a,o]=r.useState(!1);return e.jsxs("span",{className:"mah-info-wrap",onMouseEnter:()=>o(!0),onMouseLeave:()=>o(!1),onTouchStart:()=>o(d=>!d),children:[e.jsxs("svg",{className:"mah-info-svg",width:"14",height:"14",viewBox:"0 0 20 20",fill:"none",children:[e.jsx("circle",{cx:"10",cy:"10",r:"9",stroke:"currentColor",strokeWidth:"1.5"}),e.jsx("text",{x:"10",y:"14.5",textAnchor:"middle",fontSize:"11",fill:"currentColor",fontFamily:"sans-serif",fontWeight:"700",children:"i"})]}),a&&e.jsx("span",{className:"mah-tooltip",children:i})]})},w=({countryCode:i,setCountryCode:a,phone:o,setPhone:d})=>e.jsxs("div",{className:"mah-phone-wrap",children:[e.jsx("select",{value:i,onChange:l=>a(l.target.value),className:"mah-phone-code",children:ce.map(l=>e.jsxs("option",{value:l.code,children:[l.flag," ",l.code]},l.code))}),e.jsx("div",{className:"mah-phone-sep"}),e.jsx("input",{type:"tel",placeholder:"Phone no.",value:o,onChange:l=>d(l.target.value),className:"mah-phone-num"})]}),F=({deadlineTime:i,setDeadlineTime:a,show:o,setShow:d})=>e.jsxs("div",{className:"mah-dl-wrap",children:[e.jsxs("div",{className:"mah-dl-box",onClick:()=>d(!o),children:[e.jsx("span",{className:"mah-dl-label",children:"Deadline"}),e.jsxs("span",{className:"mah-dl-val",children:[i,e.jsx("svg",{width:"13",height:"13",viewBox:"0 0 20 20",fill:"none",style:{marginLeft:3,flexShrink:0},children:e.jsx("path",{d:"M5 7.5L10 12.5L15 7.5",stroke:"currentColor",strokeWidth:"1.8",strokeLinecap:"round",strokeLinejoin:"round"})})]})]}),o&&e.jsx("div",{className:"mah-dl-dropdown",children:he.map(l=>e.jsx("button",{type:"button",className:`mah-dl-opt${l===i?" mah-dl-opt--on":""}`,onClick:()=>{a(l),d(!1)},children:l},l))})]}),be=({pages:i,setPages:a})=>e.jsxs("div",{className:"mah-pages-box",children:[e.jsx("span",{className:"mah-pages-lbl",children:"Pages"}),e.jsxs("div",{className:"mah-pages-row",children:[e.jsx("button",{type:"button",className:"mah-pages-btn",onClick:()=>a(Math.max(1,i-1)),children:"−"}),e.jsx("span",{className:"mah-pages-num",children:i}),e.jsx("button",{type:"button",className:"mah-pages-btn",onClick:()=>a(i+1),children:"+"}),e.jsxs("span",{className:"mah-pages-wrd",children:[i*250," words"]})]})]}),v=({description:i,setDescription:a,attachedFiles:o,onAttach:d})=>e.jsxs("div",{className:"mah-desc-wrap",children:[e.jsx("textarea",{placeholder:"Description (Write/Attach)",value:i,onChange:l=>a(l.target.value),className:"mah-desc-ta"}),e.jsxs("div",{className:"mah-attach-bar",children:[e.jsxs("button",{type:"button",className:"mah-attach-btn",onClick:d,children:[e.jsx("svg",{width:"13",height:"13",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor",strokeWidth:"2.2",children:e.jsx("path",{d:"M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"})}),"Attach file"]}),o.length>0&&e.jsxs("span",{className:"mah-file-pill",children:[o.length," file(s)"]})]})]}),we=i=>e.jsxs(e.Fragment,{children:[e.jsxs("div",{className:"mah-row",children:[e.jsx("input",{type:"email",required:!0,placeholder:"Email",value:i.email,onChange:a=>i.setEmail(a.target.value),className:"mah-input mah-half"}),e.jsx("div",{className:"mah-half",children:e.jsx(w,c({},i))})]}),e.jsxs("div",{className:"mah-row mah-row--top",children:[e.jsxs("div",{className:"mah-half-col",children:[e.jsxs("select",{value:i.subject,onChange:a=>i.setSubject(a.target.value),className:"mah-input mah-select",children:[e.jsx("option",{value:"",children:"Subject / Course Code"}),pe.map(a=>e.jsx("option",{children:a},a))]}),e.jsx(F,c({},i)),e.jsx(be,c({},i))]}),e.jsx("div",{className:"mah-half-col",children:e.jsx(v,c({},i))})]})]}),ve=i=>e.jsxs(e.Fragment,{children:[e.jsxs("div",{className:"mah-row",children:[e.jsx("input",{type:"email",required:!0,placeholder:"Email",value:i.email,onChange:a=>i.setEmail(a.target.value),className:"mah-input mah-half"}),e.jsx("div",{className:"mah-half",children:e.jsx(w,c({},i))})]}),e.jsxs("div",{className:"mah-row",children:[e.jsxs("select",{value:i.subject,onChange:a=>i.setSubject(a.target.value),className:"mah-input mah-select mah-half",children:[e.jsx("option",{value:"",children:"Select Technology / Subject"}),me.map(a=>e.jsx("option",{children:a},a))]}),e.jsxs("select",{value:i.difficulty,onChange:a=>i.setDifficulty(a.target.value),className:"mah-input mah-select mah-half",children:[e.jsx("option",{value:"",children:"Difficulty Level"}),e.jsx("option",{children:"Beginner / Undergraduate"}),e.jsx("option",{children:"Intermediate / Graduate"}),e.jsx("option",{children:"Advanced / PhD Level"})]})]}),e.jsxs("div",{className:"mah-row mah-row--top",children:[e.jsxs("div",{className:"mah-half-col",children:[e.jsx(F,c({},i)),e.jsxs("div",{className:"mah-pages-box",children:[e.jsx("span",{className:"mah-pages-lbl",children:"Delivery Format"}),e.jsx("div",{className:"mah-radio-list",children:["Code Only","Code + Report","Code + Explanation"].map(a=>e.jsxs("label",{className:"mah-radio-row",children:[e.jsx("input",{type:"radio",name:"deliveryFmt",value:a,defaultChecked:a==="Code Only",className:"mah-native-radio"}),e.jsx("span",{className:"mah-option-txt",children:a})]},a))})]})]}),e.jsx("div",{className:"mah-half-col",children:e.jsx(v,c({},i))})]})]}),je=i=>e.jsxs(e.Fragment,{children:[e.jsxs("div",{className:"mah-row",children:[e.jsx("input",{type:"email",required:!0,placeholder:"Email",value:i.email,onChange:a=>i.setEmail(a.target.value),className:"mah-input mah-half"}),e.jsx("div",{className:"mah-half",children:e.jsx(w,c({},i))})]}),e.jsxs("div",{className:"mah-row",children:[e.jsxs("select",{value:i.subject,onChange:a=>i.setSubject(a.target.value),className:"mah-input mah-select mah-half",children:[e.jsx("option",{value:"",children:"Course / Subject Name"}),xe.map(a=>e.jsx("option",{children:a},a))]}),e.jsxs("select",{value:i.classDuration,onChange:a=>i.setClassDuration(a.target.value),className:"mah-input mah-select mah-half",children:[e.jsx("option",{value:"",children:"Class Duration"}),["1 Week","2 Weeks","1 Month","2 Months","Full Semester","Full Year"].map(a=>e.jsx("option",{children:a},a))]})]}),e.jsxs("div",{className:"mah-row mah-row--top",children:[e.jsxs("div",{className:"mah-half-col",children:[e.jsx("input",{type:"url",placeholder:"Course Platform URL (optional)",value:i.classUrl,onChange:a=>i.setClassUrl(a.target.value),className:"mah-input"}),e.jsxs("div",{className:"mah-pages-box",children:[e.jsx("span",{className:"mah-pages-lbl",children:"What needs to be done?"}),e.jsx("div",{className:"mah-radio-list",children:["Weekly Assignments","Quizzes & Tests","Discussion Posts","Final Exam","Everything"].map(a=>e.jsxs("label",{className:"mah-check-row",children:[e.jsx("input",{type:"checkbox",className:"mah-native-chk",defaultChecked:a==="Everything"}),e.jsx("span",{className:"mah-option-txt",children:a})]},a))})]})]}),e.jsx("div",{className:"mah-half-col",children:e.jsx(v,c({},i))})]})]});function ye(){const i=fe(),[a,o]=r.useState("Writing"),[d,l]=r.useState(""),[R,I]=r.useState("+1"),[W,j]=r.useState(""),[O,x]=r.useState(""),[H,g]=r.useState(""),[U,G]=r.useState("2:00 AM"),[$,y]=r.useState(1),[q,k]=r.useState([]),[h,N]=r.useState(!1),[Y,C]=r.useState(!1),[S,B]=r.useState(!1),[V,z]=r.useState(!1),[K,M]=r.useState(""),[J,E]=r.useState(""),[Q,A]=r.useState(""),f=r.useRef(null),T=n=>{o(n),x(""),g(""),z(!1)},X=n=>{n.target.files&&k(p=>[...p,...Array.from(n.target.files)])},Z=n=>{n.preventDefault(),!(!h||!d)&&(B(!0),setTimeout(()=>{B(!1),C(!0)},1800))},_=()=>{C(!1),l(""),j(""),x(""),g(""),N(!1),k([]),M(""),E(""),A(""),y(1)},u={email:d,setEmail:l,countryCode:R,setCountryCode:I,phone:W,setPhone:j,subject:O,setSubject:x,description:H,setDescription:g,deadlineTime:U,setDeadlineTime:G,showDeadline:V,setShowDeadline:z,pages:$,setPages:y,attachedFiles:q,onAttach:()=>{var n;return(n=f.current)==null?void 0:n.click()},fileInputRef:f},ee=a==="Writing"?"Get Writing Help Now →":a==="Technical"?"Get Technical Help Now →":"Get Class Help Now →",s=i,t={heroBg:s?"linear-gradient(135deg,#0f172a 0%,#1a2537 50%,#0f172a 100%)":"linear-gradient(135deg,#f5f0e8 0%,#fdf8f0 40%,#f9f4ec 100%)",dotColor:s?"#1e3a5f":"#d1c9bd",glow1:s?"rgba(241,103,0,0.07)":"rgba(255,200,120,0.18)",glow2:s?"rgba(251,146,60,0.04)":"rgba(255,230,170,0.14)",cardBg:s?"#1e293b":"#ffffff",cardBorder:s?"rgba(255,255,255,0.07)":"rgba(0,0,0,0.05)",cardShadow:s?"0 12px 60px rgba(0,0,0,0.55),0 2px 15px rgba(0,0,0,0.3)":"0 8px 50px rgba(0,0,0,0.11),0 2px 15px rgba(0,0,0,0.06)",inBg:s?"#0f172a":"#f8fafc",inBorder:s?"#2d3f55":"#e2e8f0",inColor:s?"#e2e8f0":"#1e293b",inPh:s?"#4a5e75":"#94a3b8",inFocusBg:s?"#0c1524":"#ffffff",phoneBg:s?"#0f172a":"#f8fafc",phoneBorder:s?"#2d3f55":"#e2e8f0",phoneSep:s?"#2d3f55":"#e2e8f0",phoneColor:s?"#e2e8f0":"#1e293b",dlBg:s?"#0f172a":"#f8fafc",dlBorder:s?"#2d3f55":"#e2e8f0",dlDropBg:s?"#1a2537":"#ffffff",dlDropBorder:s?"#2d3f55":"#e2e8f0",dlHov:s?"rgba(241,103,0,0.18)":"#fff5ed",pgBg:s?"#0f172a":"#f8fafc",pgBorder:s?"#2d3f55":"#e2e8f0",pgBtnBg:s?"#1e293b":"#ffffff",pgBtnBdr:s?"#3a4f66":"#e2e8f0",pgBtnClr:s?"#94a3b8":"#64748b",descBg:s?"#0f172a":"#f8fafc",descBorder:s?"#2d3f55":"#e2e8f0",descColor:s?"#e2e8f0":"#1e293b",attachBg:s?"#141f2e":"#fafafa",attachBorder:s?"#2d3f55":"#f0ede8",attachColor:"#64748b",titleColor:s?"#f1f5f9":"#1a1a1a",trustColor:s?"#94a3b8":"#555",trustIcon:"#22c55e",svcColor:"#64748b",termsColor:s?"#94a3b8":"#64748b",labelColor:s?"#4a5e75":"#94a3b8",optionTxt:s?"#cbd5e1":"#475569",badgeBg:s?"rgba(14,22,38,0.85)":"rgba(255,255,255,0.85)",badgeBdr:s?"rgba(255,255,255,0.1)":"rgba(0,0,0,0.08)",badgeColor:s?"#e2e8f0":"#2c2c2c",h1Color:s?"#f1f5f9":"#1a1a1a",subColor:s?"#94a3b8":"#555",statNum:s?"#f1f5f9":"#1a1a1a",statLbl:s?"#4a5e75":"#888",statDiv:s?"#1e3a5f":"#e0d9d0",featColor:s?"#cbd5e1":"#333",uniTagBg:s?"rgba(15,23,42,0.6)":"rgba(255,255,255,0.8)",uniTagBdr:s?"#2d3f55":"#e8e0d5",uniTagColor:s?"#94a3b8":"#555",radioRing:s?"#3a4f66":"#cbd5e1",chkboxBdr:s?"#3a4f66":"#cbd5e1"},ae={"--i-bg":t.inBg,"--i-bdr":t.inBorder,"--i-clr":t.inColor,"--i-ph":t.inPh,"--i-fbg":t.inFocusBg,"--ph-bg":t.phoneBg,"--ph-bdr":t.phoneBorder,"--ph-sep":t.phoneSep,"--ph-clr":t.phoneColor,"--dl-bg":t.dlBg,"--dl-bdr":t.dlBorder,"--dl-dbg":t.dlDropBg,"--dl-dbdr":t.dlDropBorder,"--dl-hov":t.dlHov,"--dl-lbl":t.labelColor,"--pg-bg":t.pgBg,"--pg-bdr":t.pgBorder,"--pg-btn-bg":t.pgBtnBg,"--pg-btn-bdr":t.pgBtnBdr,"--pg-btn-clr":t.pgBtnClr,"--pg-lbl":t.labelColor,"--pg-num":t.inColor,"--pg-wrd":t.labelColor,"--desc-bg":t.descBg,"--desc-bdr":t.descBorder,"--desc-clr":t.descColor,"--att-bg":t.attachBg,"--att-bdr":t.attachBorder,"--att-clr":t.attachColor,"--opt-txt":t.optionTxt};return e.jsxs("section",{className:"mah-section",style:{background:t.heroBg},children:[e.jsx("div",{className:"mah-dot-grid",style:{backgroundImage:`radial-gradient(${t.dotColor} 1px, transparent 1px)`}}),e.jsx("div",{className:"mah-radial",style:{background:`radial-gradient(ellipse 60% 50% at 8% 55%,${t.glow1} 0%,transparent 70%),
                             radial-gradient(ellipse 50% 40% at 92% 18%,${t.glow2} 0%,transparent 70%)`}}),e.jsxs("div",{className:"mah-wrap",children:[e.jsxs(m.div,{className:"mah-left",initial:{opacity:0,x:-28},animate:{opacity:1,x:0},transition:{duration:.65},children:[e.jsxs("div",{className:"mah-badge",style:{background:t.badgeBg,border:`1px solid ${t.badgeBdr}`,color:t.badgeColor},children:[e.jsx("span",{className:"mah-live-dot"}),"USA-Based Experts • Live Now"]}),e.jsxs("h1",{className:"mah-h1",style:{color:t.h1Color},children:["AI-Free Assignment Help from"," ",e.jsx("span",{className:"mah-orange",children:"Real Experts"})," ","to Do My Assignment"]}),e.jsxs("p",{className:"mah-sub",style:{color:t.subColor},children:["Get expert help in ",e.jsx("span",{className:"mah-orange mah-bold",children:"any subject"})," ","— Delivered plagiarism-free before your deadline."]}),e.jsx("div",{className:"mah-stats",children:[{num:"50K+",lbl:"Orders Completed"},{num:"4.9★",lbl:"Average Rating"},{num:"500+",lbl:"PhD Experts"}].map((n,p)=>e.jsxs(re.Fragment,{children:[p>0&&e.jsx("div",{className:"mah-stat-div",style:{background:t.statDiv}}),e.jsxs("div",{className:"mah-stat",children:[e.jsx("span",{className:"mah-stat-num",style:{color:t.statNum},children:n.num}),e.jsx("span",{className:"mah-stat-lbl",style:{color:t.statLbl},children:n.lbl})]})]},p))}),e.jsx("ul",{className:"mah-feats",children:["Guaranteed Grade or Refund","100% AI-Free Content","24/7 Live Support","Free Turnitin Report","On-Time Delivery Promise"].map(n=>e.jsxs("li",{className:"mah-feat",style:{color:t.featColor},children:[e.jsx("span",{className:"mah-feat-icon",children:"✓"}),n]},n))}),e.jsxs("div",{className:"mah-unis",children:[e.jsx("span",{className:"mah-unis-lbl",style:{color:t.statLbl},children:"Trusted by students at:"}),e.jsx("div",{className:"mah-uni-row",children:["Harvard","MIT","Stanford","Oxford","Yale"].map(n=>e.jsx("span",{className:"mah-uni-tag",style:{background:t.uniTagBg,border:`1px solid ${t.uniTagBdr}`,color:t.uniTagColor},children:n},n))})]})]}),e.jsx(m.div,{className:"mah-right",initial:{opacity:0,y:28},animate:{opacity:1,y:0},transition:{duration:.6,delay:.18},children:e.jsx("div",{className:"mah-card",style:{background:t.cardBg,border:`1px solid ${t.cardBorder}`,boxShadow:t.cardShadow},children:Y?e.jsxs(m.div,{className:"mah-success",style:{background:t.cardBg},initial:{scale:.9,opacity:0},animate:{scale:1,opacity:1},children:[e.jsx("div",{className:"mah-ok-icon",children:"✓"}),e.jsx("h3",{style:{fontSize:20,fontWeight:800,color:t.titleColor,margin:0},children:"Request Received!"}),e.jsxs("p",{style:{fontSize:13.5,color:t.trustColor,lineHeight:1.65,margin:0,maxWidth:300,textAlign:"center"},children:["We've received your ",e.jsx("strong",{style:{color:t.titleColor},children:a})," request. An expert will contact you at ",e.jsx("strong",{style:{color:t.titleColor},children:d})," within minutes."]}),e.jsx("button",{className:"mah-reset",style:{color:t.trustColor,background:s?"#0f172a":"#f8fafc",border:`1.5px solid ${s?"#2d3f55":"#e2e8f0"}`},onClick:_,children:"Submit Another Request"})]}):e.jsxs("form",{onSubmit:Z,className:"mah-form",noValidate:!0,children:[e.jsxs("div",{className:"mah-fhd",children:[e.jsx("h2",{className:"mah-ftitle",style:{color:t.titleColor},children:"AI-Free Assignment Help from Real Experts to Do My Assignment"}),e.jsx("div",{className:"mah-trust-row",children:["Guaranteed Grade or Refund","No AI","24/7 Support"].map(n=>e.jsxs("span",{className:"mah-trust-badge",style:{color:t.trustColor},children:[e.jsx("span",{className:"mah-tick",style:{color:t.trustIcon},children:"✓"}),n]},n))})]}),e.jsx("div",{className:"mah-svc-row",style:{borderColor:s?"#2d3f55":"#ede8e0"},children:["Writing","Technical","Online Class"].map(n=>e.jsxs("label",{className:"mah-svc-lbl",style:{color:a===n?"#f16700":t.svcColor},onClick:()=>T(n),children:[e.jsx("span",{className:"mah-ring",style:{border:`2px solid ${a===n?"#f16700":t.radioRing}`},children:a===n&&e.jsx("span",{className:"mah-ring-dot"})}),e.jsx("input",{type:"radio",name:"svc",value:n,checked:a===n,onChange:()=>T(n),style:{display:"none"}}),n,e.jsx(ue,{text:ge[n]})]},n))}),e.jsx(le,{mode:"wait",children:e.jsxs(m.div,{initial:{opacity:0,y:7},animate:{opacity:1,y:0},exit:{opacity:0,y:-7},transition:{duration:.18},className:"mah-fields",style:ae,children:[a==="Writing"&&e.jsx(we,c({},u)),a==="Technical"&&e.jsx(ve,b(c({},u),{difficulty:K,setDifficulty:M})),a==="Online Class"&&e.jsx(je,b(c({},u),{classUrl:J,setClassUrl:E,classDuration:Q,setClassDuration:A}))]},a)}),e.jsx("input",{ref:f,type:"file",multiple:!0,onChange:X,style:{display:"none"}}),e.jsxs("label",{className:"mah-tc",style:{color:t.termsColor},onClick:()=>N(n=>!n),children:[e.jsx("span",{className:"mah-chkbox",style:{background:h?"#f16700":t.cardBg,border:`2px solid ${h?"#f16700":t.chkboxBdr}`},children:h&&e.jsx("svg",{width:"11",height:"9",viewBox:"0 0 11 9",fill:"none",children:e.jsx("path",{d:"M1 4.5L4 7.5L10 1",stroke:"white",strokeWidth:"2.2",strokeLinecap:"round",strokeLinejoin:"round"})})}),"I accept the T&C, agree to receive offers & updates"]}),e.jsx("button",{type:"submit",className:"mah-submit",disabled:!h||!d||S,children:S?e.jsxs("span",{className:"mah-spin-row",children:[e.jsx("svg",{className:"mah-spin",width:"17",height:"17",viewBox:"0 0 24 24",fill:"none",stroke:"white",strokeWidth:"2.5",children:e.jsx("path",{d:"M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"})}),"Submitting..."]}):ee})]})})})]}),e.jsx("style",{children:`
                /* ── HARD RESET: kill ALL browser outlines inside hero ── */
                .mah-section *, .mah-section *::before, .mah-section *::after { box-sizing: border-box; }
                .mah-section input, .mah-section select, .mah-section textarea, .mah-section button {
                    outline: none !important;
                    box-shadow: none !important;
                    -webkit-tap-highlight-color: transparent;
                }
                /* Tailwind Forms ring kill */
                .mah-section input, .mah-section select, .mah-section textarea {
                    --tw-ring-shadow: 0 0 #0000 !important;
                    --tw-ring-color: transparent !important;
                }

                /* ── LAYOUT ── */
                .mah-section {
                    position: relative;
                    display: flex; align-items: flex-start;
                    padding: 96px 0 72px;
                    overflow: hidden;
                    font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
                }
                .mah-dot-grid {
                    position: absolute; inset: 0; z-index: 0;
                    background-size: 24px 24px;
                    opacity: 0.5; pointer-events: none;
                }
                .mah-radial {
                    position: absolute; inset: 0; z-index: 1; pointer-events: none;
                }
                .mah-wrap {
                    position: relative; z-index: 2;
                    width: 100%; max-width: 1260px;
                    margin: 0 auto; padding: 0 32px;
                    display: flex; align-items: flex-start; gap: 44px;
                    /* ensure content is never hidden behind navbar */
                    min-height: calc(100vh - 96px);
                }

                /* ── LEFT COL ── */
                .mah-left {
                    flex: 1 1 auto; min-width: 0;
                    display: flex; flex-direction: column; gap: 20px;
                    padding-top: 8px;
                }
                .mah-badge {
                    display: inline-flex; align-items: center; gap: 8px;
                    border-radius: 999px; padding: 5px 16px;
                    font-size: 11.5px; font-weight: 700; letter-spacing: 0.02em;
                    backdrop-filter: blur(8px); width: fit-content;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.07);
                }
                .mah-live-dot {
                    width: 8px; height: 8px; flex-shrink: 0; border-radius: 50%;
                    background: #22c55e; animation: mPulse 2s infinite;
                }
                @keyframes mPulse {
                    0%,100% { box-shadow: 0 0 0 0 rgba(34,197,94,0.35); }
                    50%     { box-shadow: 0 0 0 5px rgba(34,197,94,0); }
                }
                .mah-h1 {
                    font-size: clamp(22px, 2.8vw, 40px);
                    font-weight: 800; line-height: 1.25; margin: 0;
                    letter-spacing: -0.022em;
                    word-break: break-word;
                    overflow-wrap: break-word;
                    max-width: 100%;
                }
                .mah-orange { color: #f16700; }
                .mah-bold   { font-weight: 700; }
                .mah-sub { font-size: 15px; line-height: 1.65; margin: 0; }
                .mah-stats {
                    display: flex; align-items: center; gap: 16px; flex-wrap: wrap;
                }
                .mah-stat { display: flex; flex-direction: column; align-items: center; gap: 1px; }
                .mah-stat-num { font-size: 20px; font-weight: 800; letter-spacing: -0.02em; }
                .mah-stat-lbl { font-size: 11px; font-weight: 500; white-space: nowrap; }
                .mah-stat-div { width: 1px; height: 36px; flex-shrink: 0; }
                .mah-feats  { list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; gap: 9px; }
                .mah-feat   { display: flex; align-items: center; gap: 10px; font-size: 13.5px; font-weight: 500; }
                .mah-feat-icon {
                    width: 20px; height: 20px; background: #f16700; border-radius: 50%;
                    display: flex; align-items: center; justify-content: center;
                    color: #fff; font-size: 11px; font-weight: 800; flex-shrink: 0;
                }
                .mah-unis      { display: flex; flex-direction: column; gap: 8px; }
                .mah-unis-lbl  { font-size: 10.5px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em; }
                .mah-uni-row   { display: flex; flex-wrap: wrap; gap: 6px; }
                .mah-uni-tag   { border-radius: 6px; padding: 4px 10px; font-size: 11.5px; font-weight: 700; }

                /* ── RIGHT COL ── */
                .mah-right { flex: 0 0 480px; max-width: 480px; }
                .mah-card {
                    border-radius: 20px; padding: 22px;
                    position: relative; overflow: hidden;
                    transition: background 0.3s, box-shadow 0.3s;
                }
                /* orange accent bar */
                .mah-card::before {
                    content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px;
                    background: linear-gradient(90deg,#f16700,#ff9a00,#f16700);
                    background-size: 200% 100%; animation: mShimmer 3s linear infinite;
                }
                @keyframes mShimmer { 0%{background-position:0% 0%} 100%{background-position:200% 0%} }

                /* ── FORM ── */
                .mah-form { display: flex; flex-direction: column; gap: 11px; }
                .mah-fhd  { display: flex; flex-direction: column; gap: 8px; }
                .mah-ftitle { font-size: 16px; font-weight: 800; line-height: 1.35; margin: 0; text-align: center; word-break: break-word; overflow-wrap: break-word; }
                .mah-trust-row {
                    display: flex; align-items: center; justify-content: center;
                    gap: 10px; flex-wrap: wrap;
                }
                .mah-trust-badge { display: flex; align-items: center; gap: 3px; font-size: 11px; font-weight: 600; }
                .mah-tick { font-weight: 800; margin-right: 2px; }

                /* ── SERVICE RADIOS ── */
                .mah-svc-row {
                    display: flex; align-items: center; flex-wrap: wrap;
                    gap: 12px; border-top: 1px solid; border-bottom: 1px solid;
                    padding: 8px 0;
                }
                .mah-svc-lbl {
                    display: flex; align-items: center; gap: 6px;
                    cursor: pointer; font-size: 13px; font-weight: 600;
                    transition: color 0.15s; user-select: none;
                }
                .mah-ring {
                    width: 17px; height: 17px; border-radius: 50%; flex-shrink: 0;
                    display: inline-flex; align-items: center; justify-content: center;
                    transition: border-color 0.15s; background: transparent;
                }
                .mah-ring-dot {
                    width: 7px; height: 7px; border-radius: 50%; background: #f16700;
                }
                .mah-info-wrap {
                    position: relative; display: inline-flex; align-items: center;
                    cursor: help; color: #94a3b8;
                }
                .mah-info-svg { display: block; }
                .mah-tooltip {
                    position: absolute; bottom: calc(100% + 7px); left: 50%;
                    transform: translateX(-50%);
                    background: #1a2537; color: #e2e8f0;
                    font-size: 11px; line-height: 1.5;
                    padding: 8px 10px; border-radius: 8px;
                    white-space: pre-line; z-index: 400; pointer-events: none;
                    min-width: 195px; max-width: 240px;
                    box-shadow: 0 6px 22px rgba(0,0,0,0.35);
                    border: 1px solid rgba(255,255,255,0.09);
                }

                /* ── FIELDS BLOCK (uses CSS vars injected by parent) ── */
                .mah-fields { display: flex; flex-direction: column; gap: 8px; }
                .mah-row      { display: flex; gap: 8px; }
                .mah-row--top { align-items: flex-start; }
                .mah-half     { flex: 1 1 0; min-width: 0; }
                .mah-half-col { flex: 1 1 0; min-width: 0; display: flex; flex-direction: column; gap: 8px; }

                /* ── INPUT / SELECT ── */
                .mah-input {
                    display: block; width: 100%; height: 41px;
                    padding: 0 12px;
                    border: 1.5px solid var(--i-bdr);
                    border-radius: 10px;
                    font-size: 13px; font-family: inherit;
                    color: var(--i-clr);
                    background: var(--i-bg);
                    transition: border-color 0.18s, background 0.18s, box-shadow 0.18s;
                    outline: none !important;
                    box-shadow: none !important;
                }
                .mah-input::placeholder { color: var(--i-ph); }
                .mah-input:focus {
                    border-color: #f16700 !important;
                    background: var(--i-fbg) !important;
                    box-shadow: 0 0 0 3px rgba(241,103,0,0.13) !important;
                }
                .mah-select {
                    appearance: none; -webkit-appearance: none; cursor: pointer;
                    background-image: url("data:image/svg+xml,%3Csvg width='10' height='6' viewBox='0 0 10 6' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L5 5L9 1' stroke='%2394a3b8' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
                    background-repeat: no-repeat;
                    background-position: right 11px center;
                    padding-right: 30px !important;
                }

                /* ── PHONE ── */
                .mah-phone-wrap {
                    display: flex; align-items: center; height: 41px;
                    border: 1.5px solid var(--ph-bdr);
                    border-radius: 10px; background: var(--ph-bg);
                    overflow: hidden;
                    transition: border-color 0.18s, box-shadow 0.18s;
                }
                .mah-phone-wrap:focus-within {
                    border-color: #f16700 !important;
                    box-shadow: 0 0 0 3px rgba(241,103,0,0.13) !important;
                }
                .mah-phone-code {
                    border: none !important; background: transparent !important;
                    padding: 0 3px 0 10px; font-size: 12px; font-family: inherit;
                    color: var(--ph-clr); cursor: pointer; min-width: 80px; height: 100%;
                    outline: none !important; box-shadow: none !important;
                }
                .mah-phone-sep { width: 1px; height: 20px; background: var(--ph-sep); flex-shrink: 0; }
                .mah-phone-num {
                    flex: 1; min-width: 0; height: 100%; padding: 0 11px;
                    border: none !important; background: transparent !important;
                    font-size: 13px; font-family: inherit; color: var(--ph-clr);
                    outline: none !important; box-shadow: none !important;
                }
                .mah-phone-num::placeholder { color: var(--i-ph); }

                /* ── DEADLINE ── */
                .mah-dl-wrap { position: relative; }
                .mah-dl-box {
                    display: flex; align-items: center; justify-content: space-between;
                    height: 41px; padding: 0 12px; cursor: pointer;
                    border: 1.5px solid var(--dl-bdr); border-radius: 10px;
                    background: var(--dl-bg);
                    transition: border-color 0.18s, box-shadow 0.18s;
                    user-select: none;
                }
                .mah-dl-box:hover {
                    border-color: #f16700;
                    box-shadow: 0 0 0 3px rgba(241,103,0,0.10);
                }
                .mah-dl-label { font-size: 12.5px; font-weight: 600; color: var(--dl-lbl); }
                .mah-dl-val   { display: flex; align-items: center; font-size: 12.5px; font-weight: 600; color: var(--i-clr); }
                .mah-dl-dropdown {
                    position: absolute; top: calc(100% + 3px); left: 0; right: 0;
                    background: var(--dl-dbg); border: 1.5px solid var(--dl-dbdr);
                    border-radius: 10px; box-shadow: 0 10px 28px rgba(0,0,0,0.2);
                    z-index: 300; max-height: 190px; overflow-y: auto; padding: 4px;
                }
                .mah-dl-opt {
                    display: block; width: 100%; text-align: left;
                    padding: 6px 11px; font-size: 12.5px; font-family: inherit;
                    color: var(--i-clr); background: none; border: none;
                    border-radius: 6px; cursor: pointer; transition: background 0.1s;
                    outline: none !important;
                }
                .mah-dl-opt:hover   { background: var(--dl-hov); }
                .mah-dl-opt--on     { background: var(--dl-hov) !important; color: #f16700 !important; font-weight: 700; }

                /* ── PAGES ── */
                .mah-pages-box {
                    border: 1.5px solid var(--pg-bdr); border-radius: 10px;
                    background: var(--pg-bg); padding: 7px 12px;
                    display: flex; flex-direction: column; gap: 6px;
                }
                .mah-pages-lbl  { font-size: 9.5px; font-weight: 700; color: var(--pg-lbl); text-transform: uppercase; letter-spacing: 0.06em; }
                .mah-pages-row  { display: flex; align-items: center; gap: 7px; }
                .mah-pages-btn  {
                    width: 25px; height: 25px; flex-shrink: 0;
                    border-radius: 6px; padding: 0; cursor: pointer; line-height: 1;
                    border: 1.5px solid var(--pg-btn-bdr) !important;
                    background: var(--pg-btn-bg) !important;
                    color: var(--pg-btn-clr) !important;
                    font-size: 15px; font-weight: 700; font-family: inherit;
                    display: flex; align-items: center; justify-content: center;
                    transition: all 0.14s; outline: none !important; box-shadow: none !important;
                }
                .mah-pages-btn:hover  { background: #f16700 !important; border-color: #f16700 !important; color: #fff !important; }
                .mah-pages-num  { font-size: 14px; font-weight: 800; color: var(--pg-num); min-width: 18px; text-align: center; }
                .mah-pages-wrd  { font-size: 11.5px; color: var(--pg-wrd); font-weight: 500; }
                .mah-radio-list { display: flex; flex-direction: column; gap: 5px; }
                .mah-radio-row, .mah-check-row { display: flex; align-items: center; gap: 6px; cursor: pointer; }
                .mah-native-radio, .mah-native-chk { accent-color: #f16700; width: 14px; height: 14px; cursor: pointer; outline: none !important; flex-shrink: 0; }
                .mah-option-txt { font-size: 12.5px; color: var(--opt-txt); user-select: none; }

                /* ── DESCRIPTION ── */
                .mah-desc-wrap {
                    border: 1.5px solid var(--desc-bdr); border-radius: 10px;
                    background: var(--desc-bg); overflow: hidden;
                    display: flex; flex-direction: column;
                    transition: border-color 0.18s, box-shadow 0.18s;
                    /* fixed height so the two col heights roughly match */
                    flex: 1; min-height: 145px;
                }
                .mah-desc-wrap:focus-within {
                    border-color: #f16700 !important;
                    box-shadow: 0 0 0 3px rgba(241,103,0,0.13) !important;
                }
                .mah-desc-ta {
                    flex: 1; resize: none; padding: 10px 12px;
                    border: none !important; background: transparent !important;
                    font-size: 13px; font-family: inherit;
                    color: var(--desc-clr); line-height: 1.55; min-height: 90px;
                    outline: none !important; box-shadow: none !important;
                }
                .mah-desc-ta::placeholder { color: var(--i-ph); }
                .mah-attach-bar {
                    display: flex; align-items: center; gap: 8px;
                    padding: 6px 11px;
                    border-top: 1px solid var(--att-bdr); background: var(--att-bg);
                }
                .mah-attach-btn {
                    display: flex; align-items: center; gap: 5px;
                    background: none; border: none; padding: 0;
                    font-size: 11.5px; font-weight: 700; color: var(--att-clr);
                    cursor: pointer; font-family: inherit;
                    transition: color 0.15s; outline: none !important;
                }
                .mah-attach-btn:hover { color: #f16700; }
                .mah-file-pill {
                    font-size: 11px; color: #f16700; font-weight: 700;
                    background: rgba(241,103,0,0.10); padding: 2px 8px; border-radius: 20px;
                }

                /* ── T&C ── */
                .mah-tc {
                    display: flex; align-items: flex-start; gap: 8px; cursor: pointer;
                    font-size: 11.5px; font-weight: 500; line-height: 1.45; user-select: none;
                }
                .mah-chkbox {
                    width: 18px; height: 18px; border-radius: 4px; flex-shrink: 0; margin-top: 1px;
                    display: flex; align-items: center; justify-content: center;
                    cursor: pointer; transition: background 0.15s, border-color 0.15s;
                }


                /* ── SUBMIT ── */
                .mah-submit {
                    width: 100%; padding: 13px 20px;
                    background: linear-gradient(135deg,#f16700,#ff8c00);
                    color: #fff; font-size: 14px; font-weight: 800; font-family: inherit;
                    border: none; border-radius: 12px; cursor: pointer; letter-spacing: 0.02em;
                    transition: transform 0.2s, box-shadow 0.2s, opacity 0.18s;
                    box-shadow: 0 4px 20px rgba(241,103,0,0.32);
                    outline: none !important;
                }
                .mah-submit:disabled    { opacity: 0.55; cursor: not-allowed; transform: none !important; }
                .mah-submit:not(:disabled):hover { transform: translateY(-2px); box-shadow: 0 8px 26px rgba(241,103,0,0.44) !important; }
                .mah-spin-row { display: flex; align-items: center; justify-content: center; gap: 7px; }
                .mah-spin     { animation: mSpin 0.85s linear infinite; }
                @keyframes mSpin { to { transform: rotate(360deg); } }

                /* ── SUCCESS ── */
                .mah-success {
                    display: flex; flex-direction: column; align-items: center;
                    padding: 38px 18px; gap: 14px; border-radius: 16px;
                }
                .mah-ok-icon {
                    width: 68px; height: 68px; border-radius: 50%;
                    background: linear-gradient(135deg,#22c55e,#16a34a);
                    display: flex; align-items: center; justify-content: center;
                    font-size: 28px; color: #fff; font-weight: 800;
                    box-shadow: 0 8px 22px rgba(34,197,94,0.28);
                }
                .mah-reset {
                    margin-top: 6px; padding: 8px 22px; border-radius: 10px;
                    font-size: 13px; font-weight: 700; cursor: pointer; font-family: inherit;
                    transition: all 0.18s; outline: none !important;
                }
                .mah-reset:hover { border-color: #f16700 !important; color: #f16700 !important; }

                /* ════════════════════════════
                   RESPONSIVE — TABLET 768–1199
                   ════════════════════════════ */
                @media (max-width: 1199px) {
                    .mah-right { flex: 0 0 440px; max-width: 440px; }
                    .mah-wrap  { gap: 36px; padding: 0 24px; }
                }

                @media (max-width: 1023px) {
                    .mah-section { padding: 80px 0 52px; }
                    .mah-wrap {
                        flex-direction: column; align-items: stretch;
                        gap: 28px; padding: 0 20px;
                        min-height: auto;
                    }
                    /* Left col — centred on tablet */
                    .mah-left {
                        align-items: center; text-align: center; gap: 16px; padding-top: 0;
                    }
                    .mah-feats   { align-items: flex-start; text-align: left; width: 100%; max-width: 480px; }
                    .mah-stats   { justify-content: center; }
                    .mah-stat-div { display: none; }
                    /* Right col — full width */
                    .mah-right   { flex: none; max-width: 100%; width: 100%; }
                    /* Trust row wrap */
                    .mah-trust-row { justify-content: flex-start; }
                    .mah-ftitle  { text-align: left; }
                }

                /* ══════════════════════
                   MOBILE — ≤640px
                   ══════════════════════ */
                @media (max-width: 640px) {
                    .mah-section { padding: 72px 0 40px; }
                    .mah-wrap    { padding: 0 14px; gap: 22px; min-height: auto; }
                    .mah-h1      { font-size: clamp(22px, 7.5vw, 30px); line-height: 1.22; }
                    .mah-sub     { font-size: 13.5px; }
                    .mah-badge   { font-size: 11px; padding: 5px 12px; }
                    /* Stack all two-col rows into single column */
                    .mah-row, .mah-row--top {
                        flex-direction: column !important;
                    }
                    .mah-half, .mah-half-col { width: 100% !important; flex: none !important; }
                    /* ── Input height fix: comfortable touch targets ── */
                    .mah-input {
                        height: 48px;
                        font-size: 14px;
                        padding: 0 14px;
                        border-radius: 11px;
                    }
                    .mah-phone-wrap {
                        height: 48px;
                        border-radius: 11px;
                    }
                    .mah-phone-code { font-size: 13px; min-width: 84px; }
                    .mah-phone-num  { font-size: 14px; }
                    .mah-dl-box {
                        height: 48px;
                        border-radius: 11px;
                        padding: 0 14px;
                    }
                    .mah-dl-label, .mah-dl-val { font-size: 13.5px; }
                    /* Description gets a fixed comfortable height on mobile */
                    .mah-desc-wrap { min-height: 120px; flex: none; border-radius: 11px; }
                    .mah-desc-ta   { min-height: 80px; font-size: 14px; }
                    /* Card */
                    .mah-card    { padding: 14px 14px 18px; border-radius: 16px; }
                    .mah-form    { gap: 9px; }
                    .mah-ftitle  { font-size: 15px; }
                    /* Service row — ensure wrapping, smaller font */
                    .mah-svc-row { gap: 8px; padding: 7px 0; }
                    .mah-svc-lbl { font-size: 12.5px; }
                    /* Trust badges */
                    .mah-trust-badge { font-size: 10.5px; }
                    /* Submit */
                    .mah-submit  { font-size: 13.5px; padding: 12px 14px; }
                    /* Stats */
                    .mah-stats   { gap: 10px; }
                    .mah-stat-num { font-size: 18px; }
                }

                /* ════════════════
                   TINY — ≤380px
                   ════════════════ */
                @media (max-width: 380px) {
                    .mah-h1      { font-size: 22px; }
                    .mah-svc-row { flex-direction: column; align-items: flex-start; }
                    .mah-trust-row { flex-direction: column; align-items: flex-start; gap: 5px; }
                }
            `})]})}const P=document.getElementById("creative-hero-root");P&&de.createRoot(P).render(e.jsx(ye,{}));
