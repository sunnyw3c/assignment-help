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

const writingSubjects = [
    "Essay Writing","Research Paper","Dissertation / Thesis","Case Study",
    "Coursework","Literature Review","Book Report","Nursing","Law","MBA",
    "History","Psychology","Sociology","English","Philosophy","Other",
];
const technicalSubjects = [
    "Python","Java","C / C++","JavaScript / TypeScript","Data Science",
    "Machine Learning","Database / SQL","Mathematics","Statistics",
    "Electrical Engineering","Mechanical Engineering","Civil Engineering",
    "Physics","Chemistry","Accounting / Finance","Other",
];
const onlineClassSubjects = [
    "Business / MBA","Computer Science","Nursing / Healthcare",
    "Mathematics","English / Writing","History / Social Sciences",
    "Psychology","Law","Accounting","Engineering","Science","Other",
];

const tooltips: Record<string, string> = {
    Writing: "Essays, reports, dissertations, case studies & more — written by real academic experts.",
    Technical: "Coding, data science, math, engineering & science problems solved step-by-step.",
    "Online Class": "We handle your entire online course, quizzes, discussions & assignments.",
};

// ─── Hook: detect dark mode via <html class="dark"> ──────────────────────────
function useDarkMode() {
    const [isDark, setIsDark] = useState(() =>
        typeof document !== "undefined" &&
        document.documentElement.classList.contains("dark")
    );
    useEffect(() => {
        const el = document.documentElement;
        const obs = new MutationObserver(() => {
            setIsDark(el.classList.contains("dark"));
        });
        obs.observe(el, { attributes: true, attributeFilter: ["class"] });
        return () => obs.disconnect();
    }, []);
    return isDark;
}

// ─── Sub-components ───────────────────────────────────────────────────────────

const TrustBadge = ({ text, icon }: { text: string; icon: string }) => (
    <span className="mah-trust-badge">
        <span className="mah-trust-icon">{icon}</span>
        {text}
    </span>
);

const InfoTooltip = ({ text }: { text: string }) => {
    const [show, setShow] = useState(false);
    return (
        <span className="mah-info-wrap" onMouseEnter={() => setShow(true)} onMouseLeave={() => setShow(false)}>
            <svg className="mah-info-svg" width="14" height="14" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="10" r="9" stroke="currentColor" strokeWidth="1.5" />
                <text x="10" y="14.5" textAnchor="middle" fontSize="11" fill="currentColor" fontFamily="sans-serif" fontWeight="700">i</text>
            </svg>
            {show && <span className="mah-tooltip">{text}</span>}
        </span>
    );
};

// Shared: Phone field
const PhoneField = ({ countryCode, setCountryCode, phone, setPhone }: any) => (
    <div className="mah-phone-wrap">
        <select value={countryCode} onChange={e => setCountryCode(e.target.value)} className="mah-phone-code">
            {countryCodes.map(c => <option key={c.code} value={c.code}>{c.flag} {c.code}</option>)}
        </select>
        <div className="mah-phone-sep" />
        <input type="tel" placeholder="Phone no." value={phone}
            onChange={e => setPhone(e.target.value)} className="mah-phone-num" />
    </div>
);

// Shared: Deadline picker
const DeadlinePicker = ({ deadlineTime, setDeadlineTime, show, setShow }: any) => (
    <div className="mah-dl-wrap">
        <div className="mah-dl-box" onClick={() => setShow(!show)}>
            <span className="mah-dl-label">Deadline</span>
            <span className="mah-dl-val">
                {deadlineTime}
                <svg width="14" height="14" viewBox="0 0 20 20" fill="none" style={{ marginLeft: 4, flexShrink: 0 }}>
                    <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" />
                </svg>
            </span>
        </div>
        {show && (
            <div className="mah-dl-dropdown">
                {deadlineTimes.map(t => (
                    <button key={t} type="button"
                        className={`mah-dl-opt${t === deadlineTime ? " mah-dl-opt--active" : ""}`}
                        onClick={() => { setDeadlineTime(t); setShow(false); }}
                    >{t}</button>
                ))}
            </div>
        )}
    </div>
);

// Shared: Pages counter
const PagesCounter = ({ pages, setPages }: any) => (
    <div className="mah-pages-box">
        <span className="mah-pages-lbl">Pages</span>
        <div className="mah-pages-row">
            <button type="button" className="mah-pages-btn" onClick={() => setPages(Math.max(1, pages - 1))}>−</button>
            <span className="mah-pages-num">{pages}</span>
            <button type="button" className="mah-pages-btn" onClick={() => setPages(pages + 1)}>+</button>
            <span className="mah-pages-words">{pages * 250} words</span>
        </div>
    </div>
);

// Shared: Description + attach
const DescField = ({ description, setDescription, attachedFiles, onAttach, fileInputRef }: any) => (
    <div className="mah-desc-wrap">
        <textarea placeholder="Description (Write/Attach)" value={description}
            onChange={e => setDescription(e.target.value)}
            className="mah-desc-ta" rows={5} />
        <div className="mah-attach-bar">
            <button type="button" className="mah-attach-btn" onClick={onAttach}>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.2">
                    <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48" />
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
            <input type="email" required placeholder="Email" value={p.email} onChange={e => p.setEmail(e.target.value)} className="mah-input mah-half" />
            <div className="mah-half"><PhoneField {...p} /></div>
        </div>
        <div className="mah-row mah-row--top">
            <div className="mah-half-col">
                <select value={p.subject} onChange={e => p.setSubject(e.target.value)} className="mah-input mah-select">
                    <option value="">Subject / Course Code</option>
                    {writingSubjects.map(s => <option key={s}>{s}</option>)}
                </select>
                <DeadlinePicker {...p} />
                <PagesCounter {...p} />
            </div>
            <div className="mah-half-col">
                <DescField {...p} />
            </div>
        </div>
    </>
);

const TechnicalFields = (p: any) => (
    <>
        <div className="mah-row">
            <input type="email" required placeholder="Email" value={p.email} onChange={e => p.setEmail(e.target.value)} className="mah-input mah-half" />
            <div className="mah-half"><PhoneField {...p} /></div>
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
                <DeadlinePicker {...p} />
                <div className="mah-pages-box">
                    <span className="mah-pages-lbl">Delivery Format</span>
                    <div style={{ display: "flex", flexDirection: "column", gap: 6 }}>
                        {["Code Only", "Code + Report", "Code + Explanation"].map(opt => (
                            <label key={opt} className="mah-radio-row">
                                <input type="radio" name="deliveryFmt" value={opt} defaultChecked={opt === "Code Only"} className="mah-radio-native" />
                                <span className="mah-radio-txt">{opt}</span>
                            </label>
                        ))}
                    </div>
                </div>
            </div>
            <div className="mah-half-col">
                <DescField {...p} />
            </div>
        </div>
    </>
);

const OnlineClassFields = (p: any) => (
    <>
        <div className="mah-row">
            <input type="email" required placeholder="Email" value={p.email} onChange={e => p.setEmail(e.target.value)} className="mah-input mah-half" />
            <div className="mah-half"><PhoneField {...p} /></div>
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
                    onChange={e => p.setClassUrl(e.target.value)} className="mah-input" />
                <div className="mah-pages-box">
                    <span className="mah-pages-lbl">What needs to be done?</span>
                    <div style={{ display: "flex", flexDirection: "column", gap: 6 }}>
                        {["Weekly Assignments","Quizzes & Tests","Discussion Posts","Final Exam","Everything"].map(item => (
                            <label key={item} className="mah-check-row">
                                <input type="checkbox" className="mah-chk-native" defaultChecked={item === "Everything"} />
                                <span className="mah-check-txt">{item}</span>
                            </label>
                        ))}
                    </div>
                </div>
            </div>
            <div className="mah-half-col">
                <DescField {...p} />
            </div>
        </div>
    </>
);

// ─── Main Component ───────────────────────────────────────────────────────────
export default function CreativeHero() {
    const isDark = useDarkMode();

    const [serviceType, setServiceType] = useState<"Writing" | "Technical" | "Online Class">("Writing");
    const [email, setEmail]             = useState("");
    const [countryCode, setCountryCode] = useState("+1");
    const [phone, setPhone]             = useState("");
    const [subject, setSubject]         = useState("");
    const [description, setDescription] = useState("");
    const [deadlineTime, setDeadlineTime] = useState("2:00 AM");
    const [pages, setPages]             = useState(1);
    const [attachedFiles, setAttachedFiles] = useState<File[]>([]);
    const [acceptTerms, setAcceptTerms] = useState(false);
    const [submitted, setSubmitted]     = useState(false);
    const [submitting, setSubmitting]   = useState(false);
    const [showDeadline, setShowDeadline] = useState(false);
    const [difficulty, setDifficulty]   = useState("");
    const [classUrl, setClassUrl]       = useState("");
    const [classDuration, setClassDuration] = useState("");

    const fileInputRef = useRef<HTMLInputElement>(null);

    const switchService = (t: "Writing" | "Technical" | "Online Class") => {
        setServiceType(t);
        setSubject("");
        setDescription("");
        setShowDeadline(false);
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
        setSubmitted(false); setEmail(""); setPhone(""); setSubject("");
        setDescription(""); setAcceptTerms(false); setAttachedFiles([]);
        setDifficulty(""); setClassUrl(""); setClassDuration(""); setPages(1);
    };

    const sharedProps = {
        email, setEmail, countryCode, setCountryCode, phone, setPhone,
        subject, setSubject, description, setDescription,
        deadlineTime, setDeadlineTime, showDeadline, setShowDeadline,
        pages, setPages, attachedFiles,
        onAttach: () => fileInputRef.current?.click(),
        fileInputRef,
    };

    const submitLabel =
        serviceType === "Writing"      ? "Get Writing Help Now →" :
        serviceType === "Technical"    ? "Get Technical Help Now →" :
                                         "Get Class Help Now →";

    // CSS vars resolve per theme
    const v = isDark ? {
        heroBg:       "linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%)",
        radial1:      "rgba(241,103,0,0.06)",
        radial2:      "rgba(251,146,60,0.04)",
        cardBg:       "#1e293b",
        cardBorder:   "rgba(255,255,255,0.07)",
        cardShadow:   "0 8px 50px rgba(0,0,0,0.5), 0 2px 15px rgba(0,0,0,0.3)",
        inputBg:      "#0f172a",
        inputBorder:  "#334155",
        inputColor:   "#e2e8f0",
        inputPh:      "#64748b",
        inputFocusBg: "#0f172a",
        dlBg:         "#0f172a",
        dlBorder:     "#334155",
        dlDropBg:     "#1e293b",
        dlDropBorder: "#334155",
        dlOptHov:     "rgba(241,103,0,0.15)",
        pagesBg:      "#0f172a",
        pagesBorder:  "#334155",
        pagesBtnBg:   "#1e293b",
        pagesBtnBorder:"#475569",
        pagesBtnColor:"#e2e8f0",
        descBg:       "#0f172a",
        descBorder:   "#334155",
        descColor:    "#e2e8f0",
        attachBg:     "#1e293b",
        attachBorder: "#2d3748",
        attachColor:  "#94a3b8",
        phoneBg:      "#0f172a",
        phoneBorder:  "#334155",
        phoneSep:     "#334155",
        phoneColor:   "#e2e8f0",
        titleColor:   "#f1f5f9",
        trustColor:   "#94a3b8",
        trustIcon:    "#22c55e",
        serviceColor: "#94a3b8",
        serviceActive:"#f16700",
        termsColor:   "#94a3b8",
        labelColor:   "#64748b",
        radioTxt:     "#cbd5e1",
        checkTxt:     "#cbd5e1",
        liveBadgeBg:  "rgba(15,23,42,0.8)",
        liveBadgeBdr: "rgba(255,255,255,0.1)",
        liveBadgeClr: "#e2e8f0",
        h1Color:      "#f1f5f9",
        subtextColor: "#94a3b8",
        statNumColor: "#f1f5f9",
        statLblColor: "#64748b",
        statDivColor: "#334155",
        featureColor: "#cbd5e1",
        uniTagBg:     "rgba(15,23,42,0.6)",
        uniTagBdr:    "#334155",
        uniTagColor:  "#94a3b8",
        successCardBg:"#1e293b",
    } : {
        heroBg:       "linear-gradient(135deg, #f5f0e8 0%, #fdf8f0 40%, #f9f4ec 100%)",
        radial1:      "rgba(255,200,120,0.18)",
        radial2:      "rgba(255,230,170,0.14)",
        cardBg:       "#ffffff",
        cardBorder:   "rgba(0,0,0,0.05)",
        cardShadow:   "0 8px 50px rgba(0,0,0,0.12), 0 2px 15px rgba(0,0,0,0.06)",
        inputBg:      "#f9f9f9",
        inputBorder:  "#e2e8f0",
        inputColor:   "#1e293b",
        inputPh:      "#94a3b8",
        inputFocusBg: "#ffffff",
        dlBg:         "#f9f9f9",
        dlBorder:     "#e2e8f0",
        dlDropBg:     "#ffffff",
        dlDropBorder: "#e2e8f0",
        dlOptHov:     "#fff5ed",
        pagesBg:      "#f9f9f9",
        pagesBorder:  "#e2e8f0",
        pagesBtnBg:   "#ffffff",
        pagesBtnBorder:"#e2e8f0",
        pagesBtnColor:"#475569",
        descBg:       "#f9f9f9",
        descBorder:   "#e2e8f0",
        descColor:    "#1e293b",
        attachBg:     "#fafafa",
        attachBorder: "#f0f0f0",
        attachColor:  "#64748b",
        phoneBg:      "#f9f9f9",
        phoneBorder:  "#e2e8f0",
        phoneSep:     "#e2e8f0",
        phoneColor:   "#1e293b",
        titleColor:   "#1a1a1a",
        trustColor:   "#555555",
        trustIcon:    "#22c55e",
        serviceColor: "#64748b",
        serviceActive:"#f16700",
        termsColor:   "#64748b",
        labelColor:   "#94a3b8",
        radioTxt:     "#475569",
        checkTxt:     "#475569",
        liveBadgeBg:  "rgba(255,255,255,0.85)",
        liveBadgeBdr: "rgba(0,0,0,0.08)",
        liveBadgeClr: "#2c2c2c",
        h1Color:      "#1a1a1a",
        subtextColor: "#555555",
        statNumColor: "#1a1a1a",
        statLblColor: "#888888",
        statDivColor: "#e0d9d0",
        featureColor: "#333333",
        uniTagBg:     "rgba(255,255,255,0.8)",
        uniTagBdr:    "#e8e0d5",
        uniTagColor:  "#555555",
        successCardBg:"#ffffff",
    };

    return (
        <section className="mah-section" style={{ background: v.heroBg }}>
            {/* radial ambient */}
            {/* dot grid */}
            <div className="mah-dot-grid" style={{
                backgroundImage: isDark
                    ? "radial-gradient(#334155 1px, transparent 1px)"
                    : "radial-gradient(#d1c9bd 1px, transparent 1px)"
            }} />

            {/* radial ambient — sits ON TOP of dot grid */}
            <div className="mah-radial" style={{
                background: `radial-gradient(ellipse 60% 50% at 10% 50%, ${v.radial1} 0%, transparent 70%),
                             radial-gradient(ellipse 50% 40% at 90% 20%, ${v.radial2} 0%, transparent 70%)`
            }} />

            <div className="mah-container">

                {/* ─── LEFT ─── */}
                <motion.div className="mah-left"
                    initial={{ opacity: 0, x: -30 }} animate={{ opacity: 1, x: 0 }} transition={{ duration: 0.7 }}>

                    <div className="mah-live-badge" style={{ background: v.liveBadgeBg, border: `1px solid ${v.liveBadgeBdr}`, color: v.liveBadgeClr }}>
                        <span className="mah-live-dot" />
                        USA-Based Experts • Live Now
                    </div>

                    <h1 className="mah-h1" style={{ color: v.h1Color }}>
                        AI-Free Assignment Help from{" "}
                        <span style={{ color: "#f16700" }}>Real Experts</span> to Do My Assignment
                    </h1>

                    <p className="mah-sub" style={{ color: v.subtextColor }}>
                        Get expert help in <span style={{ color: "#f16700", fontWeight: 700 }}>any subject</span> — Delivered plagiarism-free before your deadline.
                    </p>

                    <div className="mah-stats">
                        {[
                            { num: "50K+", lbl: "Orders Completed" },
                            null,
                            { num: "4.9★", lbl: "Average Rating" },
                            null,
                            { num: "500+", lbl: "PhD Experts" },
                        ].map((s, i) =>
                            s === null
                                ? <div key={i} className="mah-divider" style={{ background: v.statDivColor }} />
                                : (
                                    <div key={i} className="mah-stat">
                                        <span className="mah-stat-num" style={{ color: v.statNumColor }}>{s.num}</span>
                                        <span className="mah-stat-lbl" style={{ color: v.statLblColor }}>{s.lbl}</span>
                                    </div>
                                )
                        )}
                    </div>

                    <ul className="mah-feat-list">
                        {["Guaranteed Grade or Refund","100% AI-Free Content","24/7 Live Support","Free Turnitin Report","On-Time Delivery Promise"].map(f => (
                            <li key={f} className="mah-feat-item" style={{ color: v.featureColor }}>
                                <span className="mah-feat-icon">✓</span>
                                {f}
                            </li>
                        ))}
                    </ul>

                    <div className="mah-unis">
                        <span style={{ fontSize: 11, color: v.statLblColor, fontWeight: 600, textTransform: "uppercase", letterSpacing: "0.06em" }}>
                            Trusted by students at:
                        </span>
                        <div className="mah-uni-row">
                            {["Harvard","MIT","Stanford","Oxford","Yale"].map(u => (
                                <span key={u} className="mah-uni-tag" style={{ background: v.uniTagBg, border: `1px solid ${v.uniTagBdr}`, color: v.uniTagColor }}>{u}</span>
                            ))}
                        </div>
                    </div>
                </motion.div>

                {/* ─── RIGHT: FORM CARD ─── */}
                <motion.div className="mah-right"
                    initial={{ opacity: 0, y: 30 }} animate={{ opacity: 1, y: 0 }} transition={{ duration: 0.6, delay: 0.2 }}>

                    <div className="mah-card" style={{ background: v.cardBg, border: `1px solid ${v.cardBorder}`, boxShadow: v.cardShadow }}>

                        {!submitted ? (
                            <form onSubmit={handleSubmit} className="mah-form" noValidate>

                                {/* Header */}
                                <div className="mah-card-head">
                                    <h2 className="mah-card-title" style={{ color: v.titleColor }}>
                                        AI-Free Assignment Help from Real Experts to Do My Assignment
                                    </h2>
                                    <div className="mah-trust-row">
                                        {[
                                            { icon: "✓", text: "Guaranteed Grade or Refund" },
                                            { icon: "✓", text: "No AI" },
                                            { icon: "✓", text: "24/7 Support" },
                                        ].map(b => (
                                            <span key={b.text} className="mah-trust-badge" style={{ color: v.trustColor }}>
                                                <span style={{ color: v.trustIcon, fontWeight: 800, marginRight: 3 }}>{b.icon}</span>
                                                {b.text}
                                            </span>
                                        ))}
                                    </div>
                                </div>

                                {/* Service type radios */}
                                <div className="mah-svc-row" style={{ borderColor: isDark ? "#334155" : "#f0f0f0" }}>
                                    {(["Writing", "Technical", "Online Class"] as const).map(type => (
                                        <label key={type} className="mah-svc-lbl"
                                            style={{ color: serviceType === type ? "#f16700" : v.serviceColor }}
                                            onClick={() => switchService(type)}>
                                            <span className="mah-radio-ring" style={{
                                                border: `2px solid ${serviceType === type ? "#f16700" : (isDark ? "#475569" : "#cbd5e1")}`,
                                            }}>
                                                {serviceType === type && <span className="mah-radio-dot" />}
                                            </span>
                                            <input type="radio" name="svc" value={type} checked={serviceType === type}
                                                onChange={() => switchService(type)} style={{ display: "none" }} />
                                            {type}
                                            <InfoTooltip text={tooltips[type]} />
                                        </label>
                                    ))}
                                </div>

                                {/* Dynamic field block */}
                                <AnimatePresence mode="wait">
                                    <motion.div key={serviceType}
                                        initial={{ opacity: 0, y: 8 }}
                                        animate={{ opacity: 1, y: 0 }}
                                        exit={{ opacity: 0, y: -8 }}
                                        transition={{ duration: 0.2 }}
                                        className="mah-fields"
                                        style={{
                                            /* Pass CSS vars into children via custom props */
                                            // @ts-ignore
                                            "--mah-input-bg":       v.inputBg,
                                            "--mah-input-border":   v.inputBorder,
                                            "--mah-input-color":    v.inputColor,
                                            "--mah-input-ph":       v.inputPh,
                                            "--mah-input-focus-bg": v.inputFocusBg,
                                            "--mah-dl-bg":          v.dlBg,
                                            "--mah-dl-border":      v.dlBorder,
                                            "--mah-dl-drop-bg":     v.dlDropBg,
                                            "--mah-dl-drop-border": v.dlDropBorder,
                                            "--mah-dl-opt-hov":     v.dlOptHov,
                                            "--mah-pages-bg":       v.pagesBg,
                                            "--mah-pages-border":   v.pagesBorder,
                                            "--mah-pages-btn-bg":   v.pagesBtnBg,
                                            "--mah-pages-btn-bdr":  v.pagesBtnBorder,
                                            "--mah-pages-btn-clr":  v.pagesBtnColor,
                                            "--mah-pages-lbl-clr":  v.labelColor,
                                            "--mah-pages-num-clr":  v.inputColor,
                                            "--mah-pages-wrd-clr":  v.labelColor,
                                            "--mah-desc-bg":        v.descBg,
                                            "--mah-desc-border":    v.descBorder,
                                            "--mah-desc-color":     v.descColor,
                                            "--mah-attach-bg":      v.attachBg,
                                            "--mah-attach-border":  v.attachBorder,
                                            "--mah-attach-color":   v.attachColor,
                                            "--mah-phone-bg":       v.phoneBg,
                                            "--mah-phone-border":   v.phoneBorder,
                                            "--mah-phone-sep":      v.phoneSep,
                                            "--mah-phone-color":    v.phoneColor,
                                            "--mah-radio-txt":      v.radioTxt,
                                            "--mah-check-txt":      v.checkTxt,
                                            "--mah-label-color":    v.labelColor,
                                        }}
                                    >
                                        {serviceType === "Writing"      && <WritingFields {...sharedProps} />}
                                        {serviceType === "Technical"    && <TechnicalFields {...sharedProps} difficulty={difficulty} setDifficulty={setDifficulty} />}
                                        {serviceType === "Online Class" && <OnlineClassFields {...sharedProps} classUrl={classUrl} setClassUrl={setClassUrl} classDuration={classDuration} setClassDuration={setClassDuration} />}
                                    </motion.div>
                                </AnimatePresence>

                                {/* Hidden file input */}
                                <input ref={fileInputRef} type="file" multiple onChange={handleFileChange} style={{ display: "none" }} />

                                {/* T&C */}
                                <label className="mah-tc-row" style={{ color: v.termsColor }}>
                                    <span className="mah-chkbox" style={{
                                        background: acceptTerms ? "#2c2c2c" : v.cardBg,
                                        border: `2px solid ${acceptTerms ? "#2c2c2c" : (isDark ? "#475569" : "#cbd5e1")}`,
                                    }} onClick={() => setAcceptTerms(x => !x)}>
                                        {acceptTerms && (
                                            <svg width="11" height="9" viewBox="0 0 11 9" fill="none">
                                                <path d="M1 4.5L4 7.5L10 1" stroke="white" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" />
                                            </svg>
                                        )}
                                    </span>
                                    <input type="checkbox" hidden checked={acceptTerms} onChange={() => setAcceptTerms(x => !x)} />
                                    I accept the T&amp;C, agree to receive offers &amp; updates
                                </label>

                                {/* Submit */}
                                <button type="submit" className="mah-submit"
                                    disabled={!acceptTerms || !email || submitting}
                                    style={{ opacity: (!acceptTerms || !email || submitting) ? 0.6 : 1 }}>
                                    {submitting ? (
                                        <span className="mah-spinner-row">
                                            <svg className="mah-spin" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" strokeWidth="2.5">
                                                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                                            </svg>
                                            Submitting...
                                        </span>
                                    ) : submitLabel}
                                </button>

                            </form>
                        ) : (
                            <motion.div className="mah-success" style={{ background: v.cardBg }}
                                initial={{ scale: 0.9, opacity: 0 }} animate={{ scale: 1, opacity: 1 }}>
                                <div className="mah-success-icon">✓</div>
                                <h3 style={{ fontSize: 21, fontWeight: 800, color: v.titleColor, margin: 0 }}>Request Received!</h3>
                                <p style={{ fontSize: 13.5, color: v.trustColor, lineHeight: 1.6, margin: 0, maxWidth: 310 }}>
                                    We've received your <strong style={{ color: v.titleColor }}>{serviceType}</strong> request.
                                    An expert will contact you at <strong style={{ color: v.titleColor }}>{email}</strong> within minutes.
                                </p>
                                <button className="mah-reset-btn" style={{ color: v.trustColor, background: isDark ? "#0f172a" : "#f9f9f9", border: `1.5px solid ${isDark ? "#334155" : "#e2e8f0"}` }}
                                    onClick={resetForm}>
                                    Submit Another Request
                                </button>
                            </motion.div>
                        )}
                    </div>
                </motion.div>
            </div>

            {/* ─── Global CSS ─── */}
            <style>{`
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
            `}</style>
        </section>
    );
}
