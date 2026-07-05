var ee=Object.defineProperty,ae=Object.defineProperties;var te=Object.getOwnPropertyDescriptors;var z=Object.getOwnPropertySymbols;var oe=Object.prototype.hasOwnProperty,re=Object.prototype.propertyIsEnumerable;var P=(t,a,i)=>a in t?ee(t,a,{enumerable:!0,configurable:!0,writable:!0,value:i}):t[a]=i,c=(t,a)=>{for(var i in a||(a={}))oe.call(a,i)&&P(t,i,a[i]);if(z)for(var i of z(a))re.call(a,i)&&P(t,i,a[i]);return t},w=(t,a)=>ae(t,te(a));import{r as n,j as e,m as p,A as ie,a as ne}from"./vendor-BClgSahe.js";const se=[{code:"+1",flag:"🇺🇸",label:"US"},{code:"+44",flag:"🇬🇧",label:"UK"},{code:"+61",flag:"🇦🇺",label:"AU"},{code:"+91",flag:"🇮🇳",label:"IN"},{code:"+1-CA",flag:"🇨🇦",label:"CA"},{code:"+64",flag:"🇳🇿",label:"NZ"},{code:"+65",flag:"🇸🇬",label:"SG"},{code:"+971",flag:"🇦🇪",label:"AE"}],le=["6:00 AM","7:00 AM","8:00 AM","9:00 AM","10:00 AM","11:00 AM","12:00 PM","1:00 PM","2:00 PM","3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM","9:00 PM","10:00 PM","11:00 PM","12:00 AM","1:00 AM","2:00 AM","3:00 AM","4:00 AM","5:00 AM"],ce=["Essay Writing","Research Paper","Dissertation / Thesis","Case Study","Coursework","Literature Review","Book Report","Nursing","Law","MBA","History","Psychology","Sociology","English","Philosophy","Other"],de=["Python","Java","C / C++","JavaScript / TypeScript","Data Science","Machine Learning","Database / SQL","Mathematics","Statistics","Electrical Engineering","Mechanical Engineering","Civil Engineering","Physics","Chemistry","Accounting / Finance","Other"],he=["Business / MBA","Computer Science","Nursing / Healthcare","Mathematics","English / Writing","History / Social Sciences","Psychology","Law","Accounting","Engineering","Science","Other"],pe={Writing:"Essays, reports, dissertations, case studies & more — written by real academic experts.",Technical:"Coding, data science, math, engineering & science problems solved step-by-step.","Online Class":"We handle your entire online course, quizzes, discussions & assignments."};function me(){const[t,a]=n.useState(()=>typeof document!="undefined"&&document.documentElement.classList.contains("dark"));return n.useEffect(()=>{const i=document.documentElement,l=new MutationObserver(()=>{a(i.classList.contains("dark"))});return l.observe(i,{attributes:!0,attributeFilter:["class"]}),()=>l.disconnect()},[]),t}const xe=({text:t})=>{const[a,i]=n.useState(!1);return e.jsxs("span",{className:"mah-info-wrap",onMouseEnter:()=>i(!0),onMouseLeave:()=>i(!1),children:[e.jsxs("svg",{className:"mah-info-svg",width:"14",height:"14",viewBox:"0 0 20 20",fill:"none",children:[e.jsx("circle",{cx:"10",cy:"10",r:"9",stroke:"currentColor",strokeWidth:"1.5"}),e.jsx("text",{x:"10",y:"14.5",textAnchor:"middle",fontSize:"11",fill:"currentColor",fontFamily:"sans-serif",fontWeight:"700",children:"i"})]}),a&&e.jsx("span",{className:"mah-tooltip",children:t})]})},y=({countryCode:t,setCountryCode:a,phone:i,setPhone:l})=>e.jsxs("div",{className:"mah-phone-wrap",children:[e.jsx("select",{value:t,onChange:s=>a(s.target.value),className:"mah-phone-code",children:se.map(s=>e.jsxs("option",{value:s.code,children:[s.flag," ",s.code]},s.code))}),e.jsx("div",{className:"mah-phone-sep"}),e.jsx("input",{type:"tel",placeholder:"Phone no.",value:i,onChange:s=>l(s.target.value),className:"mah-phone-num"})]}),F=({deadlineTime:t,setDeadlineTime:a,show:i,setShow:l})=>e.jsxs("div",{className:"mah-dl-wrap",children:[e.jsxs("div",{className:"mah-dl-box",onClick:()=>l(!i),children:[e.jsx("span",{className:"mah-dl-label",children:"Deadline"}),e.jsxs("span",{className:"mah-dl-val",children:[t,e.jsx("svg",{width:"14",height:"14",viewBox:"0 0 20 20",fill:"none",style:{marginLeft:4,flexShrink:0},children:e.jsx("path",{d:"M5 7.5L10 12.5L15 7.5",stroke:"currentColor",strokeWidth:"1.8",strokeLinecap:"round",strokeLinejoin:"round"})})]})]}),i&&e.jsx("div",{className:"mah-dl-dropdown",children:le.map(s=>e.jsx("button",{type:"button",className:`mah-dl-opt${s===t?" mah-dl-opt--active":""}`,onClick:()=>{a(s),l(!1)},children:s},s))})]}),ge=({pages:t,setPages:a})=>e.jsxs("div",{className:"mah-pages-box",children:[e.jsx("span",{className:"mah-pages-lbl",children:"Pages"}),e.jsxs("div",{className:"mah-pages-row",children:[e.jsx("button",{type:"button",className:"mah-pages-btn",onClick:()=>a(Math.max(1,t-1)),children:"−"}),e.jsx("span",{className:"mah-pages-num",children:t}),e.jsx("button",{type:"button",className:"mah-pages-btn",onClick:()=>a(t+1),children:"+"}),e.jsxs("span",{className:"mah-pages-words",children:[t*250," words"]})]})]}),j=({description:t,setDescription:a,attachedFiles:i,onAttach:l,fileInputRef:s})=>e.jsxs("div",{className:"mah-desc-wrap",children:[e.jsx("textarea",{placeholder:"Description (Write/Attach)",value:t,onChange:m=>a(m.target.value),className:"mah-desc-ta",rows:5}),e.jsxs("div",{className:"mah-attach-bar",children:[e.jsxs("button",{type:"button",className:"mah-attach-btn",onClick:l,children:[e.jsx("svg",{width:"14",height:"14",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor",strokeWidth:"2.2",children:e.jsx("path",{d:"M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"})}),"Attach file"]}),i.length>0&&e.jsxs("span",{className:"mah-file-pill",children:[i.length," file(s)"]})]})]}),ue=t=>e.jsxs(e.Fragment,{children:[e.jsxs("div",{className:"mah-row",children:[e.jsx("input",{type:"email",required:!0,placeholder:"Email",value:t.email,onChange:a=>t.setEmail(a.target.value),className:"mah-input mah-half"}),e.jsx("div",{className:"mah-half",children:e.jsx(y,c({},t))})]}),e.jsxs("div",{className:"mah-row mah-row--top",children:[e.jsxs("div",{className:"mah-half-col",children:[e.jsxs("select",{value:t.subject,onChange:a=>t.setSubject(a.target.value),className:"mah-input mah-select",children:[e.jsx("option",{value:"",children:"Subject / Course Code"}),ce.map(a=>e.jsx("option",{children:a},a))]}),e.jsx(F,c({},t)),e.jsx(ge,c({},t))]}),e.jsx("div",{className:"mah-half-col",children:e.jsx(j,c({},t))})]})]}),fe=t=>e.jsxs(e.Fragment,{children:[e.jsxs("div",{className:"mah-row",children:[e.jsx("input",{type:"email",required:!0,placeholder:"Email",value:t.email,onChange:a=>t.setEmail(a.target.value),className:"mah-input mah-half"}),e.jsx("div",{className:"mah-half",children:e.jsx(y,c({},t))})]}),e.jsxs("div",{className:"mah-row",children:[e.jsxs("select",{value:t.subject,onChange:a=>t.setSubject(a.target.value),className:"mah-input mah-select mah-half",children:[e.jsx("option",{value:"",children:"Select Technology / Subject"}),de.map(a=>e.jsx("option",{children:a},a))]}),e.jsxs("select",{value:t.difficulty,onChange:a=>t.setDifficulty(a.target.value),className:"mah-input mah-select mah-half",children:[e.jsx("option",{value:"",children:"Difficulty Level"}),e.jsx("option",{children:"Beginner / Undergraduate"}),e.jsx("option",{children:"Intermediate / Graduate"}),e.jsx("option",{children:"Advanced / PhD Level"})]})]}),e.jsxs("div",{className:"mah-row mah-row--top",children:[e.jsxs("div",{className:"mah-half-col",children:[e.jsx(F,c({},t)),e.jsxs("div",{className:"mah-pages-box",children:[e.jsx("span",{className:"mah-pages-lbl",children:"Delivery Format"}),e.jsx("div",{style:{display:"flex",flexDirection:"column",gap:6},children:["Code Only","Code + Report","Code + Explanation"].map(a=>e.jsxs("label",{className:"mah-radio-row",children:[e.jsx("input",{type:"radio",name:"deliveryFmt",value:a,defaultChecked:a==="Code Only",className:"mah-radio-native"}),e.jsx("span",{className:"mah-radio-txt",children:a})]},a))})]})]}),e.jsx("div",{className:"mah-half-col",children:e.jsx(j,c({},t))})]})]}),be=t=>e.jsxs(e.Fragment,{children:[e.jsxs("div",{className:"mah-row",children:[e.jsx("input",{type:"email",required:!0,placeholder:"Email",value:t.email,onChange:a=>t.setEmail(a.target.value),className:"mah-input mah-half"}),e.jsx("div",{className:"mah-half",children:e.jsx(y,c({},t))})]}),e.jsxs("div",{className:"mah-row",children:[e.jsxs("select",{value:t.subject,onChange:a=>t.setSubject(a.target.value),className:"mah-input mah-select mah-half",children:[e.jsx("option",{value:"",children:"Course / Subject Name"}),he.map(a=>e.jsx("option",{children:a},a))]}),e.jsxs("select",{value:t.classDuration,onChange:a=>t.setClassDuration(a.target.value),className:"mah-input mah-select mah-half",children:[e.jsx("option",{value:"",children:"Class Duration"}),["1 Week","2 Weeks","1 Month","2 Months","Full Semester","Full Year"].map(a=>e.jsx("option",{children:a},a))]})]}),e.jsxs("div",{className:"mah-row mah-row--top",children:[e.jsxs("div",{className:"mah-half-col",children:[e.jsx("input",{type:"url",placeholder:"Course Platform URL (optional)",value:t.classUrl,onChange:a=>t.setClassUrl(a.target.value),className:"mah-input"}),e.jsxs("div",{className:"mah-pages-box",children:[e.jsx("span",{className:"mah-pages-lbl",children:"What needs to be done?"}),e.jsx("div",{style:{display:"flex",flexDirection:"column",gap:6},children:["Weekly Assignments","Quizzes & Tests","Discussion Posts","Final Exam","Everything"].map(a=>e.jsxs("label",{className:"mah-check-row",children:[e.jsx("input",{type:"checkbox",className:"mah-chk-native",defaultChecked:a==="Everything"}),e.jsx("span",{className:"mah-check-txt",children:a})]},a))})]})]}),e.jsx("div",{className:"mah-half-col",children:e.jsx(j,c({},t))})]})]});function ve(){const t=me(),[a,i]=n.useState("Writing"),[l,s]=n.useState(""),[m,R]=n.useState("+1"),[I,C]=n.useState(""),[W,x]=n.useState(""),[O,g]=n.useState(""),[H,U]=n.useState("2:00 AM"),[G,k]=n.useState(1),[$,N]=n.useState([]),[d,u]=n.useState(!1),[q,B]=n.useState(!1),[f,S]=n.useState(!1),[Y,M]=n.useState(!1),[K,E]=n.useState(""),[V,A]=n.useState(""),[J,T]=n.useState(""),b=n.useRef(null),D=r=>{i(r),x(""),g(""),M(!1)},Q=r=>{r.target.files&&N(h=>[...h,...Array.from(r.target.files)])},X=r=>{r.preventDefault(),!(!d||!l)&&(S(!0),setTimeout(()=>{S(!1),B(!0)},1800))},Z=()=>{B(!1),s(""),C(""),x(""),g(""),u(!1),N([]),E(""),A(""),T(""),k(1)},v={email:l,setEmail:s,countryCode:m,setCountryCode:R,phone:I,setPhone:C,subject:W,setSubject:x,description:O,setDescription:g,deadlineTime:H,setDeadlineTime:U,showDeadline:Y,setShowDeadline:M,pages:G,setPages:k,attachedFiles:$,onAttach:()=>{var r;return(r=b.current)==null?void 0:r.click()},fileInputRef:b},_=a==="Writing"?"Get Writing Help Now →":a==="Technical"?"Get Technical Help Now →":"Get Class Help Now →",o=t?{heroBg:"linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%)",radial1:"rgba(241,103,0,0.06)",radial2:"rgba(251,146,60,0.04)",cardBg:"#1e293b",cardBorder:"rgba(255,255,255,0.07)",cardShadow:"0 8px 50px rgba(0,0,0,0.5), 0 2px 15px rgba(0,0,0,0.3)",inputBg:"#0f172a",inputBorder:"#334155",inputColor:"#e2e8f0",inputPh:"#64748b",inputFocusBg:"#0f172a",dlBg:"#0f172a",dlBorder:"#334155",dlDropBg:"#1e293b",dlDropBorder:"#334155",dlOptHov:"rgba(241,103,0,0.15)",pagesBg:"#0f172a",pagesBorder:"#334155",pagesBtnBg:"#1e293b",pagesBtnBorder:"#475569",pagesBtnColor:"#e2e8f0",descBg:"#0f172a",descBorder:"#334155",descColor:"#e2e8f0",attachBg:"#1e293b",attachBorder:"#2d3748",attachColor:"#94a3b8",phoneBg:"#0f172a",phoneBorder:"#334155",phoneSep:"#334155",phoneColor:"#e2e8f0",titleColor:"#f1f5f9",trustColor:"#94a3b8",trustIcon:"#22c55e",serviceColor:"#94a3b8",termsColor:"#94a3b8",labelColor:"#64748b",radioTxt:"#cbd5e1",checkTxt:"#cbd5e1",liveBadgeBg:"rgba(15,23,42,0.8)",liveBadgeBdr:"rgba(255,255,255,0.1)",liveBadgeClr:"#e2e8f0",h1Color:"#f1f5f9",subtextColor:"#94a3b8",statNumColor:"#f1f5f9",statLblColor:"#64748b",statDivColor:"#334155",featureColor:"#cbd5e1",uniTagBg:"rgba(15,23,42,0.6)",uniTagBdr:"#334155",uniTagColor:"#94a3b8"}:{heroBg:"linear-gradient(135deg, #f5f0e8 0%, #fdf8f0 40%, #f9f4ec 100%)",radial1:"rgba(255,200,120,0.18)",radial2:"rgba(255,230,170,0.14)",cardBg:"#ffffff",cardBorder:"rgba(0,0,0,0.05)",cardShadow:"0 8px 50px rgba(0,0,0,0.12), 0 2px 15px rgba(0,0,0,0.06)",inputBg:"#f9f9f9",inputBorder:"#e2e8f0",inputColor:"#1e293b",inputPh:"#94a3b8",inputFocusBg:"#ffffff",dlBg:"#f9f9f9",dlBorder:"#e2e8f0",dlDropBg:"#ffffff",dlDropBorder:"#e2e8f0",dlOptHov:"#fff5ed",pagesBg:"#f9f9f9",pagesBorder:"#e2e8f0",pagesBtnBg:"#ffffff",pagesBtnBorder:"#e2e8f0",pagesBtnColor:"#475569",descBg:"#f9f9f9",descBorder:"#e2e8f0",descColor:"#1e293b",attachBg:"#fafafa",attachBorder:"#f0f0f0",attachColor:"#64748b",phoneBg:"#f9f9f9",phoneBorder:"#e2e8f0",phoneSep:"#e2e8f0",phoneColor:"#1e293b",titleColor:"#1a1a1a",trustColor:"#555555",trustIcon:"#22c55e",serviceColor:"#64748b",termsColor:"#64748b",labelColor:"#94a3b8",radioTxt:"#475569",checkTxt:"#475569",liveBadgeBg:"rgba(255,255,255,0.85)",liveBadgeBdr:"rgba(0,0,0,0.08)",liveBadgeClr:"#2c2c2c",h1Color:"#1a1a1a",subtextColor:"#555555",statNumColor:"#1a1a1a",statLblColor:"#888888",statDivColor:"#e0d9d0",featureColor:"#333333",uniTagBg:"rgba(255,255,255,0.8)",uniTagBdr:"#e8e0d5",uniTagColor:"#555555"};return e.jsxs("section",{className:"mah-section",style:{background:o.heroBg},children:[e.jsx("div",{className:"mah-dot-grid",style:{backgroundImage:t?"radial-gradient(#334155 1px, transparent 1px)":"radial-gradient(#d1c9bd 1px, transparent 1px)"}}),e.jsx("div",{className:"mah-radial",style:{background:`radial-gradient(ellipse 60% 50% at 10% 50%, ${o.radial1} 0%, transparent 70%),
                             radial-gradient(ellipse 50% 40% at 90% 20%, ${o.radial2} 0%, transparent 70%)`}}),e.jsxs("div",{className:"mah-container",children:[e.jsxs(p.div,{className:"mah-left",initial:{opacity:0,x:-30},animate:{opacity:1,x:0},transition:{duration:.7},children:[e.jsxs("div",{className:"mah-live-badge",style:{background:o.liveBadgeBg,border:`1px solid ${o.liveBadgeBdr}`,color:o.liveBadgeClr},children:[e.jsx("span",{className:"mah-live-dot"}),"USA-Based Experts • Live Now"]}),e.jsxs("h1",{className:"mah-h1",style:{color:o.h1Color},children:["AI-Free Assignment Help from"," ",e.jsx("span",{style:{color:"#f16700"},children:"Real Experts"})," to Do My Assignment"]}),e.jsxs("p",{className:"mah-sub",style:{color:o.subtextColor},children:["Get expert help in ",e.jsx("span",{style:{color:"#f16700",fontWeight:700},children:"any subject"})," — Delivered plagiarism-free before your deadline."]}),e.jsx("div",{className:"mah-stats",children:[{num:"50K+",lbl:"Orders Completed"},null,{num:"4.9★",lbl:"Average Rating"},null,{num:"500+",lbl:"PhD Experts"}].map((r,h)=>r===null?e.jsx("div",{className:"mah-divider",style:{background:o.statDivColor}},h):e.jsxs("div",{className:"mah-stat",children:[e.jsx("span",{className:"mah-stat-num",style:{color:o.statNumColor},children:r.num}),e.jsx("span",{className:"mah-stat-lbl",style:{color:o.statLblColor},children:r.lbl})]},h))}),e.jsx("ul",{className:"mah-feat-list",children:["Guaranteed Grade or Refund","100% AI-Free Content","24/7 Live Support","Free Turnitin Report","On-Time Delivery Promise"].map(r=>e.jsxs("li",{className:"mah-feat-item",style:{color:o.featureColor},children:[e.jsx("span",{className:"mah-feat-icon",children:"✓"}),r]},r))}),e.jsxs("div",{className:"mah-unis",children:[e.jsx("span",{style:{fontSize:11,color:o.statLblColor,fontWeight:600,textTransform:"uppercase",letterSpacing:"0.06em"},children:"Trusted by students at:"}),e.jsx("div",{className:"mah-uni-row",children:["Harvard","MIT","Stanford","Oxford","Yale"].map(r=>e.jsx("span",{className:"mah-uni-tag",style:{background:o.uniTagBg,border:`1px solid ${o.uniTagBdr}`,color:o.uniTagColor},children:r},r))})]})]}),e.jsx(p.div,{className:"mah-right",initial:{opacity:0,y:30},animate:{opacity:1,y:0},transition:{duration:.6,delay:.2},children:e.jsx("div",{className:"mah-card",style:{background:o.cardBg,border:`1px solid ${o.cardBorder}`,boxShadow:o.cardShadow},children:q?e.jsxs(p.div,{className:"mah-success",style:{background:o.cardBg},initial:{scale:.9,opacity:0},animate:{scale:1,opacity:1},children:[e.jsx("div",{className:"mah-success-icon",children:"✓"}),e.jsx("h3",{style:{fontSize:21,fontWeight:800,color:o.titleColor,margin:0},children:"Request Received!"}),e.jsxs("p",{style:{fontSize:13.5,color:o.trustColor,lineHeight:1.6,margin:0,maxWidth:310},children:["We've received your ",e.jsx("strong",{style:{color:o.titleColor},children:a})," request. An expert will contact you at ",e.jsx("strong",{style:{color:o.titleColor},children:l})," within minutes."]}),e.jsx("button",{className:"mah-reset-btn",style:{color:o.trustColor,background:t?"#0f172a":"#f9f9f9",border:`1.5px solid ${t?"#334155":"#e2e8f0"}`},onClick:Z,children:"Submit Another Request"})]}):e.jsxs("form",{onSubmit:X,className:"mah-form",noValidate:!0,children:[e.jsxs("div",{className:"mah-card-head",children:[e.jsx("h2",{className:"mah-card-title",style:{color:o.titleColor},children:"AI-Free Assignment Help from Real Experts to Do My Assignment"}),e.jsx("div",{className:"mah-trust-row",children:[{icon:"✓",text:"Guaranteed Grade or Refund"},{icon:"✓",text:"No AI"},{icon:"✓",text:"24/7 Support"}].map(r=>e.jsxs("span",{className:"mah-trust-badge",style:{color:o.trustColor},children:[e.jsx("span",{style:{color:o.trustIcon,fontWeight:800,marginRight:3},children:r.icon}),r.text]},r.text))})]}),e.jsx("div",{className:"mah-svc-row",style:{borderColor:t?"#334155":"#f0f0f0"},children:["Writing","Technical","Online Class"].map(r=>e.jsxs("label",{className:"mah-svc-lbl",style:{color:a===r?"#f16700":o.serviceColor},onClick:()=>D(r),children:[e.jsx("span",{className:"mah-radio-ring",style:{border:`2px solid ${a===r?"#f16700":t?"#475569":"#cbd5e1"}`},children:a===r&&e.jsx("span",{className:"mah-radio-dot"})}),e.jsx("input",{type:"radio",name:"svc",value:r,checked:a===r,onChange:()=>D(r),style:{display:"none"}}),r,e.jsx(xe,{text:pe[r]})]},r))}),e.jsx(ie,{mode:"wait",children:e.jsxs(p.div,{initial:{opacity:0,y:8},animate:{opacity:1,y:0},exit:{opacity:0,y:-8},transition:{duration:.2},className:"mah-fields",style:{"--mah-input-bg":o.inputBg,"--mah-input-border":o.inputBorder,"--mah-input-color":o.inputColor,"--mah-input-ph":o.inputPh,"--mah-input-focus-bg":o.inputFocusBg,"--mah-dl-bg":o.dlBg,"--mah-dl-border":o.dlBorder,"--mah-dl-drop-bg":o.dlDropBg,"--mah-dl-drop-border":o.dlDropBorder,"--mah-dl-opt-hov":o.dlOptHov,"--mah-pages-bg":o.pagesBg,"--mah-pages-border":o.pagesBorder,"--mah-pages-btn-bg":o.pagesBtnBg,"--mah-pages-btn-bdr":o.pagesBtnBorder,"--mah-pages-btn-clr":o.pagesBtnColor,"--mah-pages-lbl-clr":o.labelColor,"--mah-pages-num-clr":o.inputColor,"--mah-pages-wrd-clr":o.labelColor,"--mah-desc-bg":o.descBg,"--mah-desc-border":o.descBorder,"--mah-desc-color":o.descColor,"--mah-attach-bg":o.attachBg,"--mah-attach-border":o.attachBorder,"--mah-attach-color":o.attachColor,"--mah-phone-bg":o.phoneBg,"--mah-phone-border":o.phoneBorder,"--mah-phone-sep":o.phoneSep,"--mah-phone-color":o.phoneColor,"--mah-radio-txt":o.radioTxt,"--mah-check-txt":o.checkTxt,"--mah-label-color":o.labelColor},children:[a==="Writing"&&e.jsx(ue,c({},v)),a==="Technical"&&e.jsx(fe,w(c({},v),{difficulty:K,setDifficulty:E})),a==="Online Class"&&e.jsx(be,w(c({},v),{classUrl:V,setClassUrl:A,classDuration:J,setClassDuration:T}))]},a)}),e.jsx("input",{ref:b,type:"file",multiple:!0,onChange:Q,style:{display:"none"}}),e.jsxs("label",{className:"mah-tc-row",style:{color:o.termsColor},children:[e.jsx("span",{className:"mah-chkbox",style:{background:d?"#2c2c2c":o.cardBg,border:`2px solid ${d?"#2c2c2c":t?"#475569":"#cbd5e1"}`},onClick:()=>u(r=>!r),children:d&&e.jsx("svg",{width:"11",height:"9",viewBox:"0 0 11 9",fill:"none",children:e.jsx("path",{d:"M1 4.5L4 7.5L10 1",stroke:"white",strokeWidth:"2",strokeLinecap:"round",strokeLinejoin:"round"})})}),e.jsx("input",{type:"checkbox",hidden:!0,checked:d,onChange:()=>u(r=>!r)}),"I accept the T&C, agree to receive offers & updates"]}),e.jsx("button",{type:"submit",className:"mah-submit",disabled:!d||!l||f,style:{opacity:!d||!l||f?.6:1},children:f?e.jsxs("span",{className:"mah-spinner-row",children:[e.jsx("svg",{className:"mah-spin",width:"18",height:"18",viewBox:"0 0 24 24",fill:"none",stroke:"white",strokeWidth:"2.5",children:e.jsx("path",{d:"M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"})}),"Submitting..."]}):_})]})})})]}),e.jsx("style",{children:`
                /* === RESET browser defaults that bleed in === */
                .mah-section *,
                .mah-section *::before,
                .mah-section *::after {
                    box-sizing: border-box;
                }

                /* Remove ALL browser focus outlines inside hero — we use custom rings */
                .mah-section input:focus,
                .mah-section select:focus,
                .mah-section textarea:focus,
                .mah-section button:focus {
                    outline: none !important;
                    box-shadow: none !important;
                }

                /* Tailwind Forms plugin overrides */
                .mah-section input[type="text"],
                .mah-section input[type="email"],
                .mah-section input[type="tel"],
                .mah-section input[type="url"],
                .mah-section select,
                .mah-section textarea {
                    --tw-ring-color: transparent !important;
                    --tw-ring-shadow: none !important;
                    --tw-border-opacity: 1;
                }

                .mah-section input[type="radio"]:focus,
                .mah-section input[type="checkbox"]:focus {
                    outline: none !important;
                    box-shadow: none !important;
                    ring: none !important;
                }

                /* === LAYOUT === */
                .mah-section {
                    position: relative;
                    min-height: 100vh;
                    display: flex;
                    align-items: center;
                    padding: 100px 0 60px;
                    overflow: hidden;
                    font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
                }
                /* dot grid pattern */
                .mah-dot-grid {
                    position: absolute; inset: 0;
                    background-size: 24px 24px;
                    opacity: 0.55;
                    pointer-events: none; z-index: 0;
                }
                .mah-radial {
                    position: absolute; inset: 0;
                    pointer-events: none; z-index: 1;
                }
                .mah-container {
                    position: relative; z-index: 1;
                    max-width: 1280px; margin: 0 auto; padding: 0 24px;
                    display: flex; align-items: flex-start; gap: 48px; width: 100%;
                }

                /* === LEFT === */
                .mah-left {
                    flex: 1 1 0; min-width: 0;
                    display: flex; flex-direction: column; gap: 22px; padding-top: 16px;
                }
                .mah-live-badge {
                    display: inline-flex; align-items: center; gap: 8px;
                    border-radius: 50px; padding: 6px 16px;
                    font-size: 12px; font-weight: 700;
                    backdrop-filter: blur(8px); width: fit-content;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.06); letter-spacing: 0.02em;
                }
                .mah-live-dot {
                    width: 8px; height: 8px; border-radius: 50%; background: #22c55e;
                    box-shadow: 0 0 0 3px rgba(34,197,94,0.25); animation: mPulse 2s infinite; flex-shrink: 0;
                }
                @keyframes mPulse {
                    0%,100% { box-shadow: 0 0 0 3px rgba(34,197,94,0.25); }
                    50%     { box-shadow: 0 0 0 6px rgba(34,197,94,0.08); }
                }
                .mah-h1 {
                    font-size: clamp(22px, 3vw, 41px); font-weight: 800;
                    line-height: 1.26; margin: 0; letter-spacing: -0.02em;
                }
                .mah-sub { font-size: 15px; margin: 0; line-height: 1.65; }
                .mah-stats { display: flex; align-items: center; gap: 18px; flex-wrap: wrap; }
                .mah-stat { display: flex; flex-direction: column; align-items: center; }
                .mah-stat-num { font-size: 21px; font-weight: 800; letter-spacing: -0.02em; }
                .mah-stat-lbl { font-size: 11px; font-weight: 500; margin-top: 1px; }
                .mah-divider { width: 1px; height: 38px; }
                .mah-feat-list { list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; gap: 9px; }
                .mah-feat-item { display: flex; align-items: center; gap: 10px; font-size: 14px; font-weight: 500; }
                .mah-feat-icon {
                    width: 21px; height: 21px; background: #f16700; border-radius: 50%;
                    display: flex; align-items: center; justify-content: center;
                    color: white; font-size: 11px; font-weight: 800; flex-shrink: 0;
                }
                .mah-unis { display: flex; flex-direction: column; gap: 9px; }
                .mah-uni-row { display: flex; flex-wrap: wrap; gap: 7px; }
                .mah-uni-tag { border-radius: 6px; padding: 4px 11px; font-size: 12px; font-weight: 700; }

                /* === CARD === */
                .mah-right { flex: 0 0 490px; max-width: 490px; }
                .mah-card {
                    border-radius: 20px; padding: 24px;
                    position: relative; overflow: hidden;
                    transition: background 0.3s, box-shadow 0.3s;
                }
                .mah-card::before {
                    content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px;
                    background: linear-gradient(90deg, #f16700, #ff9a00, #f16700);
                    background-size: 200% 100%;
                    animation: mShimmer 3s infinite linear;
                }
                @keyframes mShimmer {
                    0% { background-position: 0% 0%; } 100% { background-position: 200% 0%; }
                }

                /* === FORM === */
                .mah-form { display: flex; flex-direction: column; gap: 12px; }
                .mah-card-head { display: flex; flex-direction: column; gap: 9px; }
                .mah-card-title { font-size: 17px; font-weight: 800; line-height: 1.35; margin: 0; text-align: center; }
                .mah-trust-row { display: flex; align-items: center; justify-content: center; gap: 10px; flex-wrap: wrap; }
                .mah-trust-badge { display: flex; align-items: center; font-size: 11px; font-weight: 600; }

                /* === SERVICE RADIOS === */
                .mah-svc-row {
                    display: flex; align-items: center; gap: 14px; flex-wrap: wrap;
                    border-top: 1px solid; border-bottom: 1px solid; padding: 9px 0;
                }
                .mah-svc-lbl {
                    display: flex; align-items: center; gap: 6px; cursor: pointer;
                    font-size: 13.5px; font-weight: 600;
                    transition: color 0.18s; user-select: none;
                }
                .mah-radio-ring {
                    width: 18px; height: 18px; border-radius: 50%;
                    display: inline-flex; align-items: center; justify-content: center;
                    flex-shrink: 0; background: transparent; transition: border-color 0.18s;
                }
                .mah-radio-dot {
                    width: 8px; height: 8px; border-radius: 50%; background: #f16700; display: block;
                }
                .mah-info-wrap {
                    position: relative; display: inline-flex; align-items: center; cursor: help; color: #94a3b8;
                }
                .mah-info-svg { display: block; }
                .mah-tooltip {
                    position: absolute; bottom: calc(100% + 8px); left: 50%; transform: translateX(-50%);
                    background: #1e293b; color: #e2e8f0; font-size: 11px; padding: 8px 10px;
                    border-radius: 8px; white-space: pre-line; z-index: 300;
                    pointer-events: none; min-width: 200px;
                    box-shadow: 0 4px 20px rgba(0,0,0,0.35); line-height: 1.5;
                    border: 1px solid rgba(255,255,255,0.08);
                }

                /* === FIELD CONTAINER === */
                .mah-fields { display: flex; flex-direction: column; gap: 9px; }
                .mah-row { display: flex; gap: 9px; }
                .mah-row--top { align-items: flex-start; }
                .mah-half { flex: 1 1 0; min-width: 0; }
                .mah-half-col { flex: 1 1 0; min-width: 0; display: flex; flex-direction: column; gap: 9px; }

                /* === INPUT / SELECT === */
                .mah-input {
                    display: block; width: 100%; height: 42px;
                    padding: 0 13px;
                    border: 1.5px solid var(--mah-input-border);
                    border-radius: 10px;
                    font-size: 13px; font-family: inherit;
                    color: var(--mah-input-color);
                    background: var(--mah-input-bg);
                    transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
                    /* override Tailwind forms */
                    outline: none !important;
                    box-shadow: none !important;
                }
                .mah-input::placeholder { color: var(--mah-input-ph); }
                .mah-input:focus {
                    border-color: #f16700 !important;
                    background: var(--mah-input-focus-bg) !important;
                    box-shadow: 0 0 0 3px rgba(241,103,0,0.14) !important;
                    outline: none !important;
                }
                .mah-select {
                    appearance: none; -webkit-appearance: none; cursor: pointer;
                    background-image: url("data:image/svg+xml,%3Csvg width='11' height='7' viewBox='0 0 11 7' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L5.5 6L10 1' stroke='%2394a3b8' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
                    background-repeat: no-repeat; background-position: right 11px center;
                    padding-right: 30px !important;
                }

                /* === PHONE === */
                .mah-phone-wrap {
                    display: flex; align-items: center; height: 42px;
                    border: 1.5px solid var(--mah-phone-border);
                    border-radius: 10px; background: var(--mah-phone-bg);
                    overflow: hidden;
                    transition: border-color 0.2s, box-shadow 0.2s;
                }
                .mah-phone-wrap:focus-within {
                    border-color: #f16700 !important;
                    box-shadow: 0 0 0 3px rgba(241,103,0,0.14) !important;
                }
                .mah-phone-code {
                    border: none !important; background: transparent !important;
                    padding: 0 4px 0 10px; font-size: 12px; font-family: inherit;
                    color: var(--mah-phone-color); cursor: pointer;
                    min-width: 76px; height: 100%;
                    outline: none !important; box-shadow: none !important;
                }
                .mah-phone-sep { width: 1px; height: 22px; background: var(--mah-phone-sep); flex-shrink: 0; }
                .mah-phone-num {
                    flex: 1; border: none !important; background: transparent !important;
                    padding: 0 12px; font-size: 13px; font-family: inherit;
                    color: var(--mah-phone-color); min-width: 0; height: 100%;
                    outline: none !important; box-shadow: none !important;
                }
                .mah-phone-num::placeholder { color: var(--mah-input-ph); }

                /* === DEADLINE === */
                .mah-dl-wrap { position: relative; }
                .mah-dl-box {
                    display: flex; align-items: center; justify-content: space-between;
                    height: 42px; padding: 0 13px; cursor: pointer;
                    border: 1.5px solid var(--mah-dl-border);
                    border-radius: 10px; background: var(--mah-dl-bg);
                    transition: border-color 0.2s, box-shadow 0.2s;
                    user-select: none;
                }
                .mah-dl-box:hover {
                    border-color: #f16700;
                    box-shadow: 0 0 0 3px rgba(241,103,0,0.10);
                }
                .mah-dl-label { font-size: 13px; font-weight: 600; color: var(--mah-label-color); }
                .mah-dl-val {
                    display: flex; align-items: center; gap: 3px;
                    font-size: 13px; font-weight: 600; color: var(--mah-input-color);
                }
                .mah-dl-dropdown {
                    position: absolute; top: calc(100% + 4px); left: 0; right: 0;
                    background: var(--mah-dl-drop-bg);
                    border: 1.5px solid var(--mah-dl-drop-border);
                    border-radius: 10px;
                    box-shadow: 0 10px 28px rgba(0,0,0,0.18); z-index: 200;
                    max-height: 200px; overflow-y: auto; padding: 4px;
                }
                .mah-dl-opt {
                    display: block; width: 100%; text-align: left;
                    padding: 7px 12px; font-size: 13px; font-family: inherit;
                    color: var(--mah-input-color); background: none; border: none;
                    border-radius: 6px; cursor: pointer;
                    transition: background 0.12s; outline: none !important;
                }
                .mah-dl-opt:hover { background: var(--mah-dl-opt-hov); }
                .mah-dl-opt--active { background: var(--mah-dl-opt-hov) !important; color: #f16700 !important; font-weight: 700; }

                /* === PAGES === */
                .mah-pages-box {
                    border: 1.5px solid var(--mah-pages-border);
                    border-radius: 10px; background: var(--mah-pages-bg);
                    padding: 8px 13px; display: flex; flex-direction: column; gap: 6px;
                }
                .mah-pages-lbl { font-size: 10px; font-weight: 700; color: var(--mah-pages-lbl-clr); text-transform: uppercase; letter-spacing: 0.05em; }
                .mah-pages-row { display: flex; align-items: center; gap: 8px; }
                .mah-pages-btn {
                    width: 26px; height: 26px; border-radius: 6px; padding: 0;
                    border: 1.5px solid var(--mah-pages-btn-bdr) !important;
                    background: var(--mah-pages-btn-bg) !important;
                    color: var(--mah-pages-btn-clr) !important;
                    font-size: 16px; font-weight: 700; font-family: inherit; cursor: pointer;
                    display: flex; align-items: center; justify-content: center;
                    transition: all 0.15s; line-height: 1;
                    outline: none !important; box-shadow: none !important;
                }
                .mah-pages-btn:hover {
                    background: #f16700 !important;
                    border-color: #f16700 !important;
                    color: white !important;
                }
                .mah-pages-num { font-size: 15px; font-weight: 800; color: var(--mah-pages-num-clr); min-width: 20px; text-align: center; }
                .mah-pages-words { font-size: 12px; color: var(--mah-pages-wrd-clr); font-weight: 500; }

                /* === RADIO ROW (Technical delivery) === */
                .mah-radio-row { display: flex; align-items: center; gap: 7px; cursor: pointer; }
                .mah-radio-native {
                    accent-color: #f16700; width: 15px; height: 15px; cursor: pointer;
                    outline: none !important;
                }
                .mah-radio-txt { font-size: 13px; color: var(--mah-radio-txt); user-select: none; }

                /* === CHECKBOX (Online Class) === */
                .mah-check-row { display: flex; align-items: center; gap: 7px; cursor: pointer; }
                .mah-chk-native {
                    accent-color: #f16700; width: 15px; height: 15px; cursor: pointer;
                    outline: none !important;
                }
                .mah-check-txt { font-size: 13px; color: var(--mah-check-txt); user-select: none; }

                /* === DESCRIPTION === */
                .mah-desc-wrap {
                    border: 1.5px solid var(--mah-desc-border);
                    border-radius: 10px; background: var(--mah-desc-bg);
                    overflow: hidden; display: flex; flex-direction: column;
                    transition: border-color 0.2s, box-shadow 0.2s;
                    height: 100%; min-height: 148px;
                }
                .mah-desc-wrap:focus-within {
                    border-color: #f16700 !important;
                    box-shadow: 0 0 0 3px rgba(241,103,0,0.14) !important;
                }
                .mah-desc-ta {
                    flex: 1; border: none !important; background: transparent !important;
                    resize: none; font-size: 13px; font-family: inherit;
                    color: var(--mah-desc-color); padding: 11px 13px;
                    outline: none !important; box-shadow: none !important;
                    line-height: 1.55; min-height: 100px;
                }
                .mah-desc-ta::placeholder { color: var(--mah-input-ph); }
                .mah-attach-bar {
                    display: flex; align-items: center; gap: 10px;
                    padding: 7px 12px;
                    border-top: 1px solid var(--mah-attach-border);
                    background: var(--mah-attach-bg);
                }
                .mah-attach-btn {
                    display: flex; align-items: center; gap: 6px;
                    background: none; border: none; font-size: 12px; font-weight: 700;
                    color: var(--mah-attach-color); cursor: pointer; font-family: inherit; padding: 0;
                    transition: color 0.18s; outline: none !important;
                }
                .mah-attach-btn:hover { color: #f16700; }
                .mah-file-pill {
                    font-size: 11px; color: #f16700; font-weight: 700;
                    background: rgba(241,103,0,0.1); padding: 2px 8px; border-radius: 20px;
                }

                /* === T&C === */
                .mah-tc-row {
                    display: flex; align-items: flex-start; gap: 9px;
                    cursor: pointer; font-size: 12px; font-weight: 500; line-height: 1.45;
                    user-select: none;
                }
                .mah-chkbox {
                    width: 19px; height: 19px; border-radius: 4px;
                    display: flex; align-items: center; justify-content: center;
                    flex-shrink: 0; margin-top: 1px; cursor: pointer;
                    transition: background 0.15s, border-color 0.15s;
                }

                /* === SUBMIT === */
                .mah-submit {
                    width: 100%; padding: 14px 24px;
                    background: linear-gradient(135deg, #f16700, #ff8c00);
                    color: white; font-size: 14.5px; font-weight: 800; font-family: inherit;
                    border: none; border-radius: 12px; cursor: pointer;
                    transition: transform 0.22s, box-shadow 0.22s, opacity 0.2s;
                    letter-spacing: 0.02em;
                    box-shadow: 0 4px 20px rgba(241,103,0,0.35);
                    outline: none !important;
                }
                .mah-submit:not(:disabled):hover {
                    transform: translateY(-2px);
                    box-shadow: 0 8px 28px rgba(241,103,0,0.45) !important;
                }
                .mah-submit:disabled { cursor: not-allowed; }
                .mah-spinner-row { display: flex; align-items: center; justify-content: center; gap: 8px; }
                .mah-spin { animation: mSpin 0.9s linear infinite; }
                @keyframes mSpin { to { transform: rotate(360deg); } }

                /* === SUCCESS === */
                .mah-success {
                    display: flex; flex-direction: column; align-items: center;
                    text-align: center; padding: 40px 20px; gap: 16px; border-radius: 16px;
                }
                .mah-success-icon {
                    width: 70px; height: 70px;
                    background: linear-gradient(135deg, #22c55e, #16a34a);
                    border-radius: 50%; display: flex; align-items: center; justify-content: center;
                    font-size: 30px; color: white; font-weight: 800;
                    box-shadow: 0 8px 24px rgba(34,197,94,0.3);
                }
                .mah-reset-btn {
                    margin-top: 6px; padding: 9px 22px; border-radius: 10px;
                    font-size: 13px; font-weight: 700; cursor: pointer; font-family: inherit;
                    transition: all 0.2s; outline: none !important;
                }
                .mah-reset-btn:hover { border-color: #f16700 !important; color: #f16700 !important; }

                /* === RESPONSIVE === */
                @media (max-width: 1024px) {
                    .mah-container { flex-direction: column; align-items: center; gap: 32px; }
                    .mah-right { flex: unset; max-width: 100%; width: 100%; }
                    .mah-left { text-align: center; align-items: center; }
                    .mah-feat-list { align-items: flex-start; text-align: left; }
                }
                @media (max-width: 580px) {
                    .mah-section { padding: 88px 0 40px; }
                    .mah-container { padding: 0 16px; }
                    .mah-row { flex-direction: column; }
                    .mah-row--top { flex-direction: column; }
                    .mah-half-col { width: 100%; }
                    .mah-card { padding: 16px; }
                    .mah-svc-row { gap: 10px; }
                    .mah-stats { justify-content: center; }
                }
            `})]})}const L=document.getElementById("creative-hero-root");L&&ne.createRoot(L).render(e.jsx(ve,{}));
