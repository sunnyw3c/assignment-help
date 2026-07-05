"use client";

import React, { useState, useRef, useEffect } from "react";
import { motion, AnimatePresence } from "framer-motion";

// ─── Config ──────────────────────────────────────────────────────────────────
const countryCodes = [
    { code: "+1",    flag: "🇺🇸", label: "US" },
    { code: "+44",   flag: "🇬🇧", label: "UK" },
    { code: "+61",   flag: "🇦🇺", label: "AU" },
    { code: "+91",   flag: "🇮🇳", label: "IN" },
    { code: "+1-CA", flag: "🇨🇦", label: "CA" },
    { code: "+64",   flag: "🇳🇿", label: "NZ" },
    { code: "+65",   flag: "🇸🇬", label: "SG" },
    { code: "+971",  flag: "🇦🇪", label: "AE" },
];

const deadlineTimes = [
    "6:00 AM","7:00 AM","8:00 AM","9:00 AM","10:00 AM","11:00 AM",
    "12:00 PM","1:00 PM","2:00 PM","3:00 PM","4:00 PM","5:00 PM",
    "6:00 PM","7:00 PM","8:00 PM","9:00 PM","10:00 PM","11:00 PM",
    "12:00 AM","1:00 AM","2:00 AM","3:00 AM","4:00 AM","5:00 AM",
];

const writingSubjects   = ["Essay Writing","Research Paper","Dissertation / Thesis","Case Study","Coursework","Literature Review","Book Report","Nursing","Law","MBA","History","Psychology","Sociology","English","Philosophy","Other"];
const technicalSubjects = ["Python","Java","C / C++","JavaScript / TypeScript","Data Science","Machine Learning","Database / SQL","Mathematics","Statistics","Electrical Engineering","Mechanical Engineering","Civil Engineering","Physics","Chemistry","Accounting / Finance","Other"];
const onlineClassSubjects = ["Business / MBA","Computer Science","Nursing / Healthcare","Mathematics","English / Writing","History / Social Sciences","Psychology","Law","Accounting","Engineering","Science","Other"];

const tooltips: Record<string, string> = {
    Writing:       "Essays, reports, dissertations, case studies & more — written by real academic experts.",
    Technical:     "Coding, data science, math, engineering & science problems solved step-by-step.",
    "Online Class":"We handle your entire online course, quizzes, discussions & assignments.",
};

// ─── Dark mode hook ───────────────────────────────────────────────────────────
function useDarkMode() {
    const [isDark, setIsDark] = useState(() =>
        typeof document !== "undefined" && document.documentElement.classList.contains("dark")
    );
    useEffect(() => {
        const el = document.documentElement;
        const obs = new MutationObserver(() => setIsDark(el.classList.contains("dark")));
        obs.observe(el, { attributes: true, attributeFilter: ["class"] });
        return () => obs.disconnect();
    }, []);
    return isDark;
}

// ─── InfoTooltip ─────────────────────────────────────────────────────────────
const InfoTooltip = ({ text }: { text: string }) => {
    const [show, setShow] = useState(false);
    return (
        <span className="mah-info-wrap"
            onMouseEnter={() => setShow(true)}
            onMouseLeave={() => setShow(false)}
            onTouchStart={() => setShow(s => !s)}>
            <svg className="mah-info-svg" width="14" height="14" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="10" r="9" stroke="currentColor" strokeWidth="1.5"/>
                <text x="10" y="14.5" textAnchor="middle" fontSize="11" fill="currentColor" fontFamily="sans-serif" fontWeight="700">i</text>
            </svg>
            {show && <span className="mah-tooltip">{text}</span>}
        </span>
    );
};

// ─── Shared sub-fields ────────────────────────────────────────────────────────
const PhoneField = ({ countryCode, setCountryCode, phone, setPhone }: any) => (
    <div className="mah-phone-wrap">
        <select value={countryCode} onChange={e => setCountryCode(e.target.value)} className="mah-phone-code">
            {countryCodes.map(c => <option key={c.code} value={c.code}>{c.flag} {c.code}</option>)}
        </select>
        <div className="mah-phone-sep"/>
        <input type="tel" placeholder="Phone no." value={phone}
            onChange={e => setPhone(e.target.value)} className="mah-phone-num"/>
    </div>
);

const DeadlinePicker = ({ deadlineTime, setDeadlineTime, show, setShow }: any) => (
    <div className="mah-dl-wrap">
        <div className="mah-dl-box" onClick={() => setShow(!show)}>
            <span className="mah-dl-label">Deadline</span>
            <span className="mah-dl-val">
                {deadlineTime}
                <svg width="13" height="13" viewBox="0 0 20 20" fill="none" style={{marginLeft:3,flexShrink:0}}>
                    <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round"/>
                </svg>
            </span>
        </div>
        {show && (
            <div className="mah-dl-dropdown">
                {deadlineTimes.map(t => (
                    <button key={t} type="button"
                        className={`mah-dl-opt${t === deadlineTime ? " mah-dl-opt--on" : ""}`}
                        onClick={() => { setDeadlineTime(t); setShow(false); }}>
                        {t}
                    </button>
                ))}
            </div>
        )}
    </div>
);

const PagesCounter = ({ pages, setPages }: any) => (
    <div className="mah-pages-box">
        <span className="mah-pages-lbl">Pages</span>
        <div className="mah-pages-row">
            <button type="button" className="mah-pages-btn" onClick={() => setPages(Math.max(1, pages - 1))}>−</button>
            <span className="mah-pages-num">{pages}</span>
            <button type="button" className="mah-pages-btn" onClick={() => setPages(pages + 1)}>+</button>
            <span className="mah-pages-wrd">{pages * 250} words</span>
        </div>
    </div>
);

const DescField = ({ description, setDescription, attachedFiles, onAttach }: any) => (
    <div className="mah-desc-wrap">
        <textarea placeholder="Description (Write/Attach)" value={description}
            onChange={e => setDescription(e.target.value)}
            className="mah-desc-ta"/>
        <div className="mah-attach-bar">
            <button type="button" className="mah-attach-btn" onClick={onAttach}>
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.2">
                    <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/>
                </svg>
                Attach file
            </button>
            {attachedFiles.length > 0 && (
                <span className="mah-file-pill">{attachedFiles.length} file(s)</span>
            )}
        </div>
    </div>
);

// ─── Field sets ───────────────────────────────────────────────────────────────
const WritingFields = (p: any) => (
    <>
        <div className="mah-row">
            <input type="email" required placeholder="Email" value={p.email}
                onChange={e => p.setEmail(e.target.value)} className="mah-input mah-half"/>
            <div className="mah-half"><PhoneField {...p}/></div>
        </div>
        <div className="mah-row mah-row--top">
            <div className="mah-half-col">
                <select value={p.subject} onChange={e => p.setSubject(e.target.value)} className="mah-input mah-select">
                    <option value="">Subject / Course Code</option>
                    {writingSubjects.map(s => <option key={s}>{s}</option>)}
                </select>
                <DeadlinePicker {...p}/>
                <PagesCounter {...p}/>
            </div>
            <div className="mah-half-col">
                <DescField {...p}/>
            </div>
        </div>
    </>
);

const TechnicalFields = (p: any) => (
    <>
        <div className="mah-row">
            <input type="email" required placeholder="Email" value={p.email}
                onChange={e => p.setEmail(e.target.value)} className="mah-input mah-half"/>
            <div className="mah-half"><PhoneField {...p}/></div>
        </div>
        <div className="mah-row">
            <select value={p.subject} onChange={e => p.setSubject(e.target.value)} className="mah-input mah-select mah-half">
                <option value="">Select Technology / Subject</option>
                {technicalSubjects.map(s => <option key={s}>{s}</option>)}
            </select>
            <select value={p.difficulty} onChange={e => p.setDifficulty(e.target.value)} className="mah-input mah-select mah-half">
                <option value="">Difficulty Level</option>
                <option>Beginner / Undergraduate</option>
                <option>Intermediate / Graduate</option>
                <option>Advanced / PhD Level</option>
            </select>
        </div>
        <div className="mah-row mah-row--top">
            <div className="mah-half-col">
                <DeadlinePicker {...p}/>
                <div className="mah-pages-box">
                    <span className="mah-pages-lbl">Delivery Format</span>
                    <div className="mah-radio-list">
                        {["Code Only","Code + Report","Code + Explanation"].map(opt => (
                            <label key={opt} className="mah-radio-row">
                                <input type="radio" name="deliveryFmt" value={opt}
                                    defaultChecked={opt === "Code Only"} className="mah-native-radio"/>
                                <span className="mah-option-txt">{opt}</span>
                            </label>
                        ))}
                    </div>
                </div>
            </div>
            <div className="mah-half-col">
                <DescField {...p}/>
            </div>
        </div>
    </>
);

const OnlineClassFields = (p: any) => (
    <>
        <div className="mah-row">
            <input type="email" required placeholder="Email" value={p.email}
                onChange={e => p.setEmail(e.target.value)} className="mah-input mah-half"/>
            <div className="mah-half"><PhoneField {...p}/></div>
        </div>
        <div className="mah-row">
            <select value={p.subject} onChange={e => p.setSubject(e.target.value)} className="mah-input mah-select mah-half">
                <option value="">Course / Subject Name</option>
                {onlineClassSubjects.map(s => <option key={s}>{s}</option>)}
            </select>
            <select value={p.classDuration} onChange={e => p.setClassDuration(e.target.value)} className="mah-input mah-select mah-half">
                <option value="">Class Duration</option>
                {["1 Week","2 Weeks","1 Month","2 Months","Full Semester","Full Year"].map(d => <option key={d}>{d}</option>)}
            </select>
        </div>
        <div className="mah-row mah-row--top">
            <div className="mah-half-col">
                <input type="url" placeholder="Course Platform URL (optional)" value={p.classUrl}
                    onChange={e => p.setClassUrl(e.target.value)} className="mah-input"/>
                <div className="mah-pages-box">
                    <span className="mah-pages-lbl">What needs to be done?</span>
                    <div className="mah-radio-list">
                        {["Weekly Assignments","Quizzes & Tests","Discussion Posts","Final Exam","Everything"].map(item => (
                            <label key={item} className="mah-check-row">
                                <input type="checkbox" className="mah-native-chk" defaultChecked={item === "Everything"}/>
                                <span className="mah-option-txt">{item}</span>
                            </label>
                        ))}
                    </div>
                </div>
            </div>
            <div className="mah-half-col">
                <DescField {...p}/>
            </div>
        </div>
    </>
);

// ─── Main ─────────────────────────────────────────────────────────────────────
export default function CreativeHero() {
    const isDark = useDarkMode();

    const [serviceType, setServiceType] = useState<"Writing"|"Technical"|"Online Class">("Writing");
    const [email,       setEmail]       = useState("");
    const [countryCode, setCountryCode] = useState("+1");
    const [phone,       setPhone]       = useState("");
    const [subject,     setSubject]     = useState("");
    const [description, setDescription] = useState("");
    const [deadlineTime,setDeadlineTime]= useState("2:00 AM");
    const [pages,       setPages]       = useState(1);
    const [attachedFiles,setAttachedFiles] = useState<File[]>([]);
    const [acceptTerms, setAcceptTerms] = useState(false);
    const [submitted,   setSubmitted]   = useState(false);
    const [submitting,  setSubmitting]  = useState(false);
    const [showDeadline,setShowDeadline]= useState(false);
    const [difficulty,  setDifficulty]  = useState("");
    const [classUrl,    setClassUrl]    = useState("");
    const [classDuration,setClassDuration] = useState("");

    const fileInputRef = useRef<HTMLInputElement>(null);

    const switchService = (t: "Writing"|"Technical"|"Online Class") => {
        setServiceType(t); setSubject(""); setDescription(""); setShowDeadline(false);
    };

    const handleFileChange = (e: React.ChangeEvent<HTMLInputElement>) => {
        if (e.target.files) setAttachedFiles(prev => [...prev, ...Array.from(e.target.files!)]);
    };

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        if (!acceptTerms || !email) return;
        setSubmitting(true);
        setTimeout(() => { setSubmitting(false); setSubmitted(true); }, 1800);
    };

    const resetForm = () => {
        setSubmitted(false); setEmail(""); setPhone(""); setSubject(""); setDescription("");
        setAcceptTerms(false); setAttachedFiles([]); setDifficulty("");
        setClassUrl(""); setClassDuration(""); setPages(1);
    };

    const shared = {
        email, setEmail, countryCode, setCountryCode, phone, setPhone,
        subject, setSubject, description, setDescription,
        deadlineTime, setDeadlineTime, showDeadline, setShowDeadline,
        pages, setPages, attachedFiles,
        onAttach: () => fileInputRef.current?.click(),
        fileInputRef,
    };

    const submitLabel = serviceType === "Writing" ? "Get Writing Help Now →"
                      : serviceType === "Technical" ? "Get Technical Help Now →"
                      : "Get Class Help Now →";

    // ─── Theme tokens ─────────────────────────────────────────────────────────
    const D = isDark;
    const t = {
        // section
        heroBg:        D ? "linear-gradient(135deg,#0f172a 0%,#1a2537 50%,#0f172a 100%)" : "linear-gradient(135deg,#f5f0e8 0%,#fdf8f0 40%,#f9f4ec 100%)",
        dotColor:      D ? "#1e3a5f" : "#d1c9bd",
        glow1:         D ? "rgba(241,103,0,0.07)" : "rgba(255,200,120,0.18)",
        glow2:         D ? "rgba(251,146,60,0.04)" : "rgba(255,230,170,0.14)",
        // card
        cardBg:        D ? "#1e293b" : "#ffffff",
        cardBorder:    D ? "rgba(255,255,255,0.07)" : "rgba(0,0,0,0.05)",
        cardShadow:    D ? "0 12px 60px rgba(0,0,0,0.55),0 2px 15px rgba(0,0,0,0.3)" : "0 8px 50px rgba(0,0,0,0.11),0 2px 15px rgba(0,0,0,0.06)",
        // inputs
        inBg:          D ? "#0f172a" : "#f8fafc",
        inBorder:      D ? "#2d3f55" : "#e2e8f0",
        inColor:       D ? "#e2e8f0" : "#1e293b",
        inPh:          D ? "#4a5e75" : "#94a3b8",
        inFocusBg:     D ? "#0c1524" : "#ffffff",
        // phone
        phoneBg:       D ? "#0f172a" : "#f8fafc",
        phoneBorder:   D ? "#2d3f55" : "#e2e8f0",
        phoneSep:      D ? "#2d3f55" : "#e2e8f0",
        phoneColor:    D ? "#e2e8f0" : "#1e293b",
        // deadline
        dlBg:          D ? "#0f172a" : "#f8fafc",
        dlBorder:      D ? "#2d3f55" : "#e2e8f0",
        dlDropBg:      D ? "#1a2537" : "#ffffff",
        dlDropBorder:  D ? "#2d3f55" : "#e2e8f0",
        dlHov:         D ? "rgba(241,103,0,0.18)" : "#fff5ed",
        // pages box
        pgBg:          D ? "#0f172a" : "#f8fafc",
        pgBorder:      D ? "#2d3f55" : "#e2e8f0",
        pgBtnBg:       D ? "#1e293b" : "#ffffff",
        pgBtnBdr:      D ? "#3a4f66" : "#e2e8f0",
        pgBtnClr:      D ? "#94a3b8" : "#64748b",
        // desc
        descBg:        D ? "#0f172a" : "#f8fafc",
        descBorder:    D ? "#2d3f55" : "#e2e8f0",
        descColor:     D ? "#e2e8f0" : "#1e293b",
        attachBg:      D ? "#141f2e" : "#fafafa",
        attachBorder:  D ? "#2d3f55" : "#f0ede8",
        attachColor:   D ? "#64748b" : "#64748b",
        // text
        titleColor:    D ? "#f1f5f9" : "#1a1a1a",
        trustColor:    D ? "#94a3b8" : "#555",
        trustIcon:     "#22c55e",
        svcColor:      D ? "#64748b" : "#64748b",
        termsColor:    D ? "#94a3b8" : "#64748b",
        labelColor:    D ? "#4a5e75" : "#94a3b8",
        optionTxt:     D ? "#cbd5e1" : "#475569",
        // left col
        badgeBg:       D ? "rgba(14,22,38,0.85)" : "rgba(255,255,255,0.85)",
        badgeBdr:      D ? "rgba(255,255,255,0.1)" : "rgba(0,0,0,0.08)",
        badgeColor:    D ? "#e2e8f0" : "#2c2c2c",
        h1Color:       D ? "#f1f5f9" : "#1a1a1a",
        subColor:      D ? "#94a3b8" : "#555",
        statNum:       D ? "#f1f5f9" : "#1a1a1a",
        statLbl:       D ? "#4a5e75" : "#888",
        statDiv:       D ? "#1e3a5f" : "#e0d9d0",
        featColor:     D ? "#cbd5e1" : "#333",
        uniTagBg:      D ? "rgba(15,23,42,0.6)" : "rgba(255,255,255,0.8)",
        uniTagBdr:     D ? "#2d3f55" : "#e8e0d5",
        uniTagColor:   D ? "#94a3b8" : "#555",
        radioRing:     D ? "#3a4f66" : "#cbd5e1",
        chkboxBdr:     D ? "#3a4f66" : "#cbd5e1",
    };

    // CSS vars string for the fields block
    const cssVars: React.CSSProperties & Record<string,string> = {
        "--i-bg":        t.inBg,
        "--i-bdr":       t.inBorder,
        "--i-clr":       t.inColor,
        "--i-ph":        t.inPh,
        "--i-fbg":       t.inFocusBg,
        "--ph-bg":       t.phoneBg,
        "--ph-bdr":      t.phoneBorder,
        "--ph-sep":      t.phoneSep,
        "--ph-clr":      t.phoneColor,
        "--dl-bg":       t.dlBg,
        "--dl-bdr":      t.dlBorder,
        "--dl-dbg":      t.dlDropBg,
        "--dl-dbdr":     t.dlDropBorder,
        "--dl-hov":      t.dlHov,
        "--dl-lbl":      t.labelColor,
        "--pg-bg":       t.pgBg,
        "--pg-bdr":      t.pgBorder,
        "--pg-btn-bg":   t.pgBtnBg,
        "--pg-btn-bdr":  t.pgBtnBdr,
        "--pg-btn-clr":  t.pgBtnClr,
        "--pg-lbl":      t.labelColor,
        "--pg-num":      t.inColor,
        "--pg-wrd":      t.labelColor,
        "--desc-bg":     t.descBg,
        "--desc-bdr":    t.descBorder,
        "--desc-clr":    t.descColor,
        "--att-bg":      t.attachBg,
        "--att-bdr":     t.attachBorder,
        "--att-clr":     t.attachColor,
        "--opt-txt":     t.optionTxt,
    } as any;

    return (
        <section className="mah-section" style={{ background: t.heroBg }}>

            {/* dot grid */}
            <div className="mah-dot-grid" style={{
                backgroundImage: `radial-gradient(${t.dotColor} 1px, transparent 1px)`
            }}/>

            {/* radial glow */}
            <div className="mah-radial" style={{
                background: `radial-gradient(ellipse 60% 50% at 8% 55%,${t.glow1} 0%,transparent 70%),
                             radial-gradient(ellipse 50% 40% at 92% 18%,${t.glow2} 0%,transparent 70%)`
            }}/>

            <div className="mah-wrap">

                {/* ── LEFT ── */}
                <motion.div className="mah-left"
                    initial={{ opacity:0, x:-28 }} animate={{ opacity:1, x:0 }} transition={{ duration:0.65 }}>

                    <div className="mah-badge" style={{ background:t.badgeBg, border:`1px solid ${t.badgeBdr}`, color:t.badgeColor }}>
                        <span className="mah-live-dot"/>
                        USA-Based Experts • Live Now
                    </div>

                    <h1 className="mah-h1" style={{ color:t.h1Color }}>
                        AI-Free Assignment Help from{" "}
                        <span className="mah-orange">Real Experts</span>{" "}
                        to Do My Assignment
                    </h1>

                    <p className="mah-sub" style={{ color:t.subColor }}>
                        Get expert help in <span className="mah-orange mah-bold">any subject</span>
                        {" "}— Delivered plagiarism-free before your deadline.
                    </p>

                    <div className="mah-stats">
                        {[
                            { num:"50K+", lbl:"Orders Completed" },
                            { num:"4.9★", lbl:"Average Rating" },
                            { num:"500+", lbl:"PhD Experts" },
                        ].map((s,i) => (
                            <React.Fragment key={i}>
                                {i > 0 && <div className="mah-stat-div" style={{ background:t.statDiv }}/>}
                                <div className="mah-stat">
                                    <span className="mah-stat-num" style={{ color:t.statNum }}>{s.num}</span>
                                    <span className="mah-stat-lbl" style={{ color:t.statLbl }}>{s.lbl}</span>
                                </div>
                            </React.Fragment>
                        ))}
                    </div>

                    <ul className="mah-feats">
                        {["Guaranteed Grade or Refund","100% AI-Free Content","24/7 Live Support","Free Turnitin Report","On-Time Delivery Promise"].map(f => (
                            <li key={f} className="mah-feat" style={{ color:t.featColor }}>
                                <span className="mah-feat-icon">✓</span>
                                {f}
                            </li>
                        ))}
                    </ul>

                    <div className="mah-unis">
                        <span className="mah-unis-lbl" style={{ color:t.statLbl }}>Trusted by students at:</span>
                        <div className="mah-uni-row">
                            {["Harvard","MIT","Stanford","Oxford","Yale"].map(u => (
                                <span key={u} className="mah-uni-tag"
                                    style={{ background:t.uniTagBg, border:`1px solid ${t.uniTagBdr}`, color:t.uniTagColor }}>
                                    {u}
                                </span>
                            ))}
                        </div>
                    </div>
                </motion.div>

                {/* ── RIGHT: FORM CARD ── */}
                <motion.div className="mah-right"
                    initial={{ opacity:0, y:28 }} animate={{ opacity:1, y:0 }} transition={{ duration:0.6, delay:0.18 }}>

                    <div className="mah-card"
                        style={{ background:t.cardBg, border:`1px solid ${t.cardBorder}`, boxShadow:t.cardShadow }}>

                        {!submitted ? (
                            <form onSubmit={handleSubmit} className="mah-form" noValidate>

                                {/* Header */}
                                <div className="mah-fhd">
                                    <h2 className="mah-ftitle" style={{ color:t.titleColor }}>
                                        AI-Free Assignment Help from Real Experts to Do My Assignment
                                    </h2>
                                    <div className="mah-trust-row">
                                        {[
                                            "Guaranteed Grade or Refund",
                                            "No AI",
                                            "24/7 Support",
                                        ].map(txt => (
                                            <span key={txt} className="mah-trust-badge" style={{ color:t.trustColor }}>
                                                <span className="mah-tick" style={{ color:t.trustIcon }}>✓</span>
                                                {txt}
                                            </span>
                                        ))}
                                    </div>
                                </div>

                                {/* Service radios */}
                                <div className="mah-svc-row" style={{ borderColor: D ? "#2d3f55" : "#ede8e0" }}>
                                    {(["Writing","Technical","Online Class"] as const).map(type => (
                                        <label key={type} className="mah-svc-lbl"
                                            style={{ color: serviceType === type ? "#f16700" : t.svcColor }}
                                            onClick={() => switchService(type)}>
                                            <span className="mah-ring"
                                                style={{ border:`2px solid ${serviceType===type ? "#f16700" : t.radioRing}` }}>
                                                {serviceType === type && <span className="mah-ring-dot"/>}
                                            </span>
                                            <input type="radio" name="svc" value={type}
                                                checked={serviceType===type}
                                                onChange={() => switchService(type)}
                                                style={{ display:"none" }}/>
                                            {type}
                                            <InfoTooltip text={tooltips[type]}/>
                                        </label>
                                    ))}
                                </div>

                                {/* Dynamic fields */}
                                <AnimatePresence mode="wait">
                                    <motion.div key={serviceType}
                                        initial={{ opacity:0, y:7 }}
                                        animate={{ opacity:1, y:0 }}
                                        exit={{ opacity:0, y:-7 }}
                                        transition={{ duration:0.18 }}
                                        className="mah-fields"
                                        style={cssVars}>
                                        {serviceType === "Writing"      && <WritingFields {...shared}/>}
                                        {serviceType === "Technical"    && <TechnicalFields {...shared} difficulty={difficulty} setDifficulty={setDifficulty}/>}
                                        {serviceType === "Online Class" && <OnlineClassFields {...shared} classUrl={classUrl} setClassUrl={setClassUrl} classDuration={classDuration} setClassDuration={setClassDuration}/>}
                                    </motion.div>
                                </AnimatePresence>

                                <input ref={fileInputRef} type="file" multiple onChange={handleFileChange} style={{ display:"none" }}/>

                                {/* T&C */}
                                <label className="mah-tc" style={{ color:t.termsColor }}
                                    onClick={() => setAcceptTerms(x => !x)}>
                                    <span className="mah-chkbox"
                                        style={{
                                            background: acceptTerms ? "#f16700" : t.cardBg,
                                            border: `2px solid ${acceptTerms ? "#f16700" : t.chkboxBdr}`,
                                        }}>
                                        {acceptTerms && (
                                            <svg width="11" height="9" viewBox="0 0 11 9" fill="none">
                                                <path d="M1 4.5L4 7.5L10 1" stroke="white" strokeWidth="2.2" strokeLinecap="round" strokeLinejoin="round"/>
                                            </svg>
                                        )}
                                    </span>
                                    I accept the T&amp;C, agree to receive offers &amp; updates
                                </label>

                                {/* Submit */}
                                <button type="submit" className="mah-submit"
                                    disabled={!acceptTerms || !email || submitting}>
                                    {submitting ? (
                                        <span className="mah-spin-row">
                                            <svg className="mah-spin" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="white" strokeWidth="2.5">
                                                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                                            </svg>
                                            Submitting...
                                        </span>
                                    ) : submitLabel}
                                </button>

                            </form>
                        ) : (
                            <motion.div className="mah-success" style={{ background:t.cardBg }}
                                initial={{ scale:0.9, opacity:0 }} animate={{ scale:1, opacity:1 }}>
                                <div className="mah-ok-icon">✓</div>
                                <h3 style={{ fontSize:20, fontWeight:800, color:t.titleColor, margin:0 }}>Request Received!</h3>
                                <p style={{ fontSize:13.5, color:t.trustColor, lineHeight:1.65, margin:0, maxWidth:300, textAlign:"center" }}>
                                    We've received your <strong style={{ color:t.titleColor }}>{serviceType}</strong> request.
                                    An expert will contact you at <strong style={{ color:t.titleColor }}>{email}</strong> within minutes.
                                </p>
                                <button className="mah-reset"
                                    style={{ color:t.trustColor, background:D?"#0f172a":"#f8fafc", border:`1.5px solid ${D?"#2d3f55":"#e2e8f0"}` }}
                                    onClick={resetForm}>
                                    Submit Another Request
                                </button>
                            </motion.div>
                        )}
                    </div>
                </motion.div>

            </div>{/* end mah-wrap */}

            {/* ─── STYLES ─── */}
            <style>{`
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
            `}</style>
        </section>
    );
}
