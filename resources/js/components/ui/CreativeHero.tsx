"use client";

import React, { useState, useRef, useEffect } from "react";
import { motion, AnimatePresence } from "framer-motion";

// ─── Config ───────────────────────────────────────────────────────────────────
const countryCodes = [
    { code: "+1",    flag: "🇺🇸" }, { code: "+44",   flag: "🇬🇧" },
    { code: "+61",   flag: "🇦🇺" }, { code: "+91",   flag: "🇮🇳" },
    { code: "+1-CA", flag: "🇨🇦" }, { code: "+64",   flag: "🇳🇿" },
    { code: "+65",   flag: "🇸🇬" }, { code: "+971",  flag: "🇦🇪" },
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

// ─── CSS variable tokens (injected once on section root) ─────────────────────
function buildVars(dark: boolean): React.CSSProperties {
    const D = dark;
    return {
        "--ahusa-bg":          D ? "linear-gradient(135deg,#0f172a 0%,#1a2537 50%,#0f172a 100%)" : "linear-gradient(135deg,#f5f0e8 0%,#fdf8f0 40%,#f9f4ec 100%)",
        "--ahusa-dot":         D ? "#1e3a5f"                     : "#d1c9bd",
        "--ahusa-glow1":       D ? "rgba(241,103,0,0.07)"        : "rgba(255,200,120,0.18)",
        "--ahusa-glow2":       D ? "rgba(251,146,60,0.04)"       : "rgba(255,230,170,0.14)",
        "--ahusa-card-bg":     D ? "#1e293b"                     : "#ffffff",
        "--ahusa-card-bdr":    D ? "rgba(255,255,255,0.07)"      : "rgba(0,0,0,0.05)",
        "--ahusa-card-shadow": D ? "0 12px 60px rgba(0,0,0,0.55),0 2px 15px rgba(0,0,0,0.3)" : "0 8px 50px rgba(0,0,0,0.11),0 2px 15px rgba(0,0,0,0.06)",
        "--i-bg":            D ? "#0f172a"  : "#f8fafc",
        "--i-bdr":           D ? "#2d3f55"  : "#e2e8f0",
        "--i-clr":           D ? "#e2e8f0"  : "#1e293b",
        "--i-ph":            D ? "#4a5e75"  : "#94a3b8",
        "--i-fbg":           D ? "#0c1524"  : "#ffffff",
        "--ph-bg":           D ? "#0f172a"  : "#f8fafc",
        "--ph-bdr":          D ? "#2d3f55"  : "#e2e8f0",
        "--ph-sep":          D ? "#2d3f55"  : "#e2e8f0",
        "--ph-clr":          D ? "#e2e8f0"  : "#1e293b",
        "--dl-bg":           D ? "#0f172a"  : "#f8fafc",
        "--dl-bdr":          D ? "#2d3f55"  : "#e2e8f0",
        "--dl-dbg":          D ? "#1a2537"  : "#ffffff",
        "--dl-dbdr":         D ? "#2d3f55"  : "#e2e8f0",
        "--dl-hov":          D ? "rgba(241,103,0,0.18)" : "#fff5ed",
        "--dl-lbl":          D ? "#4a5e75"  : "#94a3b8",
        "--pg-bg":           D ? "#0f172a"  : "#f8fafc",
        "--pg-bdr":          D ? "#2d3f55"  : "#e2e8f0",
        "--pg-btn-bg":       D ? "#1e293b"  : "#ffffff",
        "--pg-btn-bdr":      D ? "#3a4f66"  : "#e2e8f0",
        "--pg-btn-clr":      D ? "#94a3b8"  : "#64748b",
        "--pg-lbl":          D ? "#4a5e75"  : "#94a3b8",
        "--pg-num":          D ? "#e2e8f0"  : "#1e293b",
        "--pg-wrd":          D ? "#4a5e75"  : "#94a3b8",
        "--desc-bg":         D ? "#0f172a"  : "#f8fafc",
        "--desc-bdr":        D ? "#2d3f55"  : "#e2e8f0",
        "--desc-clr":        D ? "#e2e8f0"  : "#1e293b",
        "--att-bg":          D ? "#141f2e"  : "#fafafa",
        "--att-bdr":         D ? "#2d3f55"  : "#f0ede8",
        "--att-clr":         D ? "#64748b"  : "#64748b",
        "--opt-txt":         D ? "#cbd5e1"  : "#475569",
        "--svc-bdr":         D ? "#2d3f55"  : "#ede8e0",
        "--badge-bg":        D ? "rgba(14,22,38,0.85)"   : "rgba(255,255,255,0.85)",
        "--badge-bdr":       D ? "rgba(255,255,255,0.1)" : "rgba(0,0,0,0.08)",
        "--badge-clr":       D ? "#e2e8f0"  : "#2c2c2c",
        "--h1-clr":          D ? "#f1f5f9"  : "#1a1a1a",
        "--sub-clr":         D ? "#94a3b8"  : "#555555",
        "--stat-num":        D ? "#f1f5f9"  : "#1a1a1a",
        "--stat-lbl":        D ? "#4a5e75"  : "#888888",
        "--stat-div":        D ? "#1e3a5f"  : "#e0d9d0",
        "--feat-clr":        D ? "#cbd5e1"  : "#333333",
        "--uni-bg":          D ? "rgba(15,23,42,0.6)"    : "rgba(255,255,255,0.8)",
        "--uni-bdr":         D ? "#2d3f55"  : "#e8e0d5",
        "--uni-clr":         D ? "#94a3b8"  : "#555555",
        "--unis-lbl":        D ? "#4a5e75"  : "#888888",
        "--title-clr":       D ? "#f1f5f9"  : "#1a1a1a",
        "--trust-clr":       D ? "#94a3b8"  : "#555555",
        "--svc-clr":         D ? "#64748b"  : "#64748b",
        "--terms-clr":       D ? "#94a3b8"  : "#64748b",
        "--ring-bdr":        D ? "#3a4f66"  : "#cbd5e1",
        "--chk-bdr":         D ? "#3a4f66"  : "#cbd5e1",
        "--success-title":   D ? "#f1f5f9"  : "#1a1a1a",
        "--success-sub":     D ? "#94a3b8"  : "#555555",
        "--reset-bg":        D ? "#0f172a"  : "#f8fafc",
        "--reset-bdr":       D ? "#2d3f55"  : "#e2e8f0",
        "--reset-clr":       D ? "#94a3b8"  : "#64748b",
    } as React.CSSProperties;
}

// ─── InfoTooltip ──────────────────────────────────────────────────────────────
const InfoTooltip = ({ text }: { text: string }) => {
    const [show, setShow] = useState(false);
    return (
        <span className="relative inline-flex items-center cursor-help text-slate-400"
            onMouseEnter={() => setShow(true)} onMouseLeave={() => setShow(false)}
            onTouchStart={() => setShow(s => !s)}>
            <svg className="block" width="14" height="14" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="10" r="9" stroke="currentColor" strokeWidth="1.5"/>
                <text x="10" y="14.5" textAnchor="middle" fontSize="11" fill="currentColor" fontFamily="sans-serif" fontWeight="700">i</text>
            </svg>
            {show && (
                <span className="absolute bottom-[calc(100%+7px)] left-1/2 -translate-x-1/2 bg-[#1a2537] text-slate-200 text-[11px] leading-[1.5] px-2.5 py-2 rounded-lg whitespace-pre-line z-[400] pointer-events-none min-w-[195px] max-w-[240px] shadow-[0_6px_22px_rgba(0,0,0,0.35)] border border-white/[0.09]">
                    {text}
                </span>
            )}
        </span>
    );
};

// ─── PhoneField ───────────────────────────────────────────────────────────────
const PhoneField = ({ countryCode, setCountryCode, phone, setPhone }: any) => (
    <div className="flex items-center h-[41px] border-[1.5px] border-[var(--ph-bdr)] rounded-[10px] bg-[var(--ph-bg)] overflow-hidden transition-[border-color,box-shadow] duration-[180ms] focus-within:border-[#f16700] focus-within:shadow-[0_0_0_3px_rgba(241,103,0,0.13)]">
        <select value={countryCode} onChange={e => setCountryCode(e.target.value)}
            className="h-full border-0 bg-transparent pl-2.5 pr-1 text-[12px] text-[var(--ph-clr)] cursor-pointer min-w-[80px] outline-none shadow-none appearance-none">
            {countryCodes.map(c => <option key={c.code} value={c.code}>{c.flag} {c.code}</option>)}
        </select>
        <div className="w-px h-5 flex-shrink-0 bg-[var(--ph-sep)]"/>
        <input type="tel" placeholder="Phone no." value={phone}
            onChange={e => setPhone(e.target.value)}
            className="flex-1 min-w-0 h-full px-3 border-0 bg-transparent text-[13px] text-[var(--ph-clr)] placeholder:text-[var(--i-ph)] outline-none shadow-none"/>
    </div>
);

// ─── DeadlinePicker ───────────────────────────────────────────────────────────
const DeadlinePicker = ({ deadlineTime, setDeadlineTime, showDeadline, setShowDeadline }: any) => (
    <div className="relative">
        <div className="flex items-center justify-between h-[41px] px-3 cursor-pointer select-none border-[1.5px] border-[var(--dl-bdr)] rounded-[10px] bg-[var(--dl-bg)] transition-[border-color,box-shadow] duration-[180ms] hover:border-[#f16700] hover:shadow-[0_0_0_3px_rgba(241,103,0,0.10)]"
            onClick={() => setShowDeadline(!showDeadline)}>
            <span className="text-[12.5px] font-semibold text-[var(--dl-lbl)]">Deadline</span>
            <span className="flex items-center gap-[3px] text-[12.5px] font-semibold text-[var(--i-clr)]">
                {deadlineTime}
                <svg className="flex-shrink-0" width="13" height="13" viewBox="0 0 20 20" fill="none">
                    <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round"/>
                </svg>
            </span>
        </div>
        {showDeadline && (
            <div className="absolute top-[calc(100%+3px)] left-0 right-0 bg-[var(--dl-dbg)] border-[1.5px] border-[var(--dl-dbdr)] rounded-[10px] shadow-[0_10px_28px_rgba(0,0,0,0.2)] z-[300] max-h-[190px] overflow-y-auto p-1">
                {deadlineTimes.map(t => (
                    <button key={t} type="button"
                        className={`block w-full text-left px-3 py-[6px] text-[12.5px] text-[var(--i-clr)] bg-transparent border-0 rounded-[6px] cursor-pointer outline-none transition-[background] duration-100 hover:bg-[var(--dl-hov)] ${t === deadlineTime ? "!bg-[var(--dl-hov)] !text-[#f16700] font-bold" : ""}`}
                        onClick={() => { setDeadlineTime(t); setShowDeadline(false); }}>
                        {t}
                    </button>
                ))}
            </div>
        )}
    </div>
);

// ─── PagesCounter ─────────────────────────────────────────────────────────────
const PagesCounter = ({ pages, setPages }: any) => (
    <div className="border-[1.5px] border-[var(--pg-bdr)] rounded-[10px] bg-[var(--pg-bg)] px-3 py-[7px] flex flex-col gap-[6px]">
        <span className="text-[9.5px] font-bold text-[var(--pg-lbl)] uppercase tracking-[0.06em]">Pages</span>
        <div className="flex items-center gap-[7px]">
            <button type="button" onClick={() => setPages(Math.max(1, pages - 1))}
                className="w-[25px] h-[25px] shrink-0 flex items-center justify-center rounded-[6px] border-[1.5px] border-[var(--pg-btn-bdr)] bg-[var(--pg-btn-bg)] text-[var(--pg-btn-clr)] text-[15px] font-bold cursor-pointer outline-none transition-all duration-150 hover:!bg-[#f16700] hover:!border-[#f16700] hover:!text-white">−</button>
            <span className="text-[14px] font-extrabold text-[var(--pg-num)] min-w-[18px] text-center">{pages}</span>
            <button type="button" onClick={() => setPages(pages + 1)}
                className="w-[25px] h-[25px] shrink-0 flex items-center justify-center rounded-[6px] border-[1.5px] border-[var(--pg-btn-bdr)] bg-[var(--pg-btn-bg)] text-[var(--pg-btn-clr)] text-[15px] font-bold cursor-pointer outline-none transition-all duration-150 hover:!bg-[#f16700] hover:!border-[#f16700] hover:!text-white">+</button>
            <span className="text-[11.5px] font-medium text-[var(--pg-wrd)]">{pages * 250} words</span>
        </div>
    </div>
);

// ─── DescField ────────────────────────────────────────────────────────────────
const DescField = ({ description, setDescription, attachedFiles, onAttach }: any) => (
    <div className="border-[1.5px] border-[var(--desc-bdr)] rounded-[10px] bg-[var(--desc-bg)] overflow-hidden flex flex-col flex-1 min-h-[145px] transition-[border-color,box-shadow] duration-[180ms] focus-within:border-[#f16700] focus-within:shadow-[0_0_0_3px_rgba(241,103,0,0.13)]">
        <textarea placeholder="Description (Write/Attach)" value={description}
            onChange={e => setDescription(e.target.value)}
            className="flex-1 resize-none px-3 py-[10px] border-0 bg-transparent text-[13px] text-[var(--desc-clr)] placeholder:text-[var(--i-ph)] leading-[1.55] min-h-[90px] outline-none shadow-none"/>
        <div className="flex items-center gap-2 px-3 py-[6px] border-t border-t-[var(--att-bdr)] bg-[var(--att-bg)]">
            <button type="button" onClick={onAttach}
                className="flex items-center gap-[5px] bg-transparent border-0 p-0 text-[11.5px] font-bold text-[var(--att-clr)] cursor-pointer outline-none transition-colors duration-150 hover:text-[#f16700]">
                <svg className="block" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.2">
                    <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/>
                </svg>
                Attach file
            </button>
            {attachedFiles.length > 0 && (
                <span className="text-[11px] text-[#f16700] font-bold bg-[rgba(241,103,0,0.10)] px-2 py-0.5 rounded-full">
                    {attachedFiles.length} file(s)
                </span>
            )}
        </div>
    </div>
);

// ─── Input / Select shared class ─────────────────────────────────────────────
const inputCls = "block w-full h-[41px] px-3 border-[1.5px] border-[var(--i-bdr)] rounded-[10px] text-[13px] text-[var(--i-clr)] bg-[var(--i-bg)] transition-[border-color,background,box-shadow] duration-[180ms] outline-none shadow-none placeholder:text-[var(--i-ph)] focus:border-[#f16700] focus:!bg-[var(--i-fbg)] focus:!shadow-[0_0_0_3px_rgba(241,103,0,0.13)]";
const selectCls = `${inputCls} appearance-none cursor-pointer bg-[image:url("data:image/svg+xml,%3Csvg%20width%3D'10'%20height%3D'6'%20viewBox%3D'0%200%2010%206'%20fill%3D'none'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Cpath%20d%3D'M1%201L5%205L9%201'%20stroke%3D'%2394a3b8'%20stroke-width%3D'1.5'%20stroke-linecap%3D'round'%20stroke-linejoin%3D'round'%2F%3E%3C%2Fsvg%3E")] bg-no-repeat bg-[right_11px_center] pr-8`;

// ─── Field sets ───────────────────────────────────────────────────────────────
const WritingFields = (p: any) => (
    <>
        <div className="flex gap-2 max-sm:flex-col">
            <input type="email" required placeholder="Email" value={p.email}
                onChange={e => p.setEmail(e.target.value)} className={`${inputCls} flex-[3] min-w-0`}/>
            <div className="flex-[4] min-w-0"><PhoneField {...p}/></div>
        </div>
        <div className="flex gap-2 items-start max-sm:flex-col">
            <div className="flex-1 min-w-0 flex flex-col gap-2">
                <select value={p.subject} onChange={e => p.setSubject(e.target.value)} className={selectCls}>
                    <option value="">Subject / Course Code</option>
                    {writingSubjects.map(s => <option key={s}>{s}</option>)}
                </select>
                <DeadlinePicker {...p}/>
                <PagesCounter {...p}/>
            </div>
            <div className="flex-1 min-w-0 flex flex-col gap-2"><DescField {...p}/></div>
        </div>
    </>
);

const TechnicalFields = (p: any) => (
    <>
        <div className="flex gap-2 max-sm:flex-col">
            <input type="email" required placeholder="Email" value={p.email}
                onChange={e => p.setEmail(e.target.value)} className={`${inputCls} flex-1 min-w-0`}/>
            <div className="flex-1 min-w-0"><PhoneField {...p}/></div>
        </div>
        <div className="flex gap-2 max-sm:flex-col">
            <select value={p.subject} onChange={e => p.setSubject(e.target.value)} className={`${selectCls} flex-1 min-w-0`}>
                <option value="">Select Technology / Subject</option>
                {technicalSubjects.map(s => <option key={s}>{s}</option>)}
            </select>
            <select value={p.difficulty} onChange={e => p.setDifficulty(e.target.value)} className={`${selectCls} flex-1 min-w-0`}>
                <option value="">Difficulty Level</option>
                <option>Beginner / Undergraduate</option>
                <option>Intermediate / Graduate</option>
                <option>Advanced / PhD Level</option>
            </select>
        </div>
        <div className="flex gap-2 items-start max-sm:flex-col">
            <div className="flex-1 min-w-0 flex flex-col gap-2">
                <DeadlinePicker {...p}/>
                <div className="border-[1.5px] border-[var(--pg-bdr)] rounded-[10px] bg-[var(--pg-bg)] px-3 py-[7px] flex flex-col gap-[6px]">
                    <span className="text-[9.5px] font-bold text-[var(--pg-lbl)] uppercase tracking-[0.06em]">Delivery Format</span>
                    <div className="flex flex-col gap-[5px]">
                        {["Code Only","Code + Report","Code + Explanation"].map(opt => (
                            <label key={opt} className="flex items-center gap-[6px] cursor-pointer">
                                <input type="radio" name="deliveryFmt" value={opt} defaultChecked={opt === "Code Only"}
                                    className="accent-[#f16700] w-[14px] h-[14px] cursor-pointer shrink-0 outline-none"/>
                                <span className="text-[12.5px] text-[var(--opt-txt)] select-none">{opt}</span>
                            </label>
                        ))}
                    </div>
                </div>
            </div>
            <div className="flex-1 min-w-0 flex flex-col gap-2"><DescField {...p}/></div>
        </div>
    </>
);

const OnlineClassFields = (p: any) => (
    <>
        <div className="flex gap-2 max-sm:flex-col">
            <input type="email" required placeholder="Email" value={p.email}
                onChange={e => p.setEmail(e.target.value)} className={`${inputCls} flex-1 min-w-0`}/>
            <div className="flex-1 min-w-0"><PhoneField {...p}/></div>
        </div>
        <div className="flex gap-2 max-sm:flex-col">
            <select value={p.subject} onChange={e => p.setSubject(e.target.value)} className={`${selectCls} flex-1 min-w-0`}>
                <option value="">Course / Subject Name</option>
                {onlineClassSubjects.map(s => <option key={s}>{s}</option>)}
            </select>
            <select value={p.classDuration} onChange={e => p.setClassDuration(e.target.value)} className={`${selectCls} flex-1 min-w-0`}>
                <option value="">Class Duration</option>
                {["1 Week","2 Weeks","1 Month","2 Months","Full Semester","Full Year"].map(d => <option key={d}>{d}</option>)}
            </select>
        </div>
        <div className="flex gap-2 items-start max-sm:flex-col">
            <div className="flex-1 min-w-0 flex flex-col gap-2">
                <input type="url" placeholder="Course Platform URL (optional)" value={p.classUrl}
                    onChange={e => p.setClassUrl(e.target.value)} className={inputCls}/>
                <div className="border-[1.5px] border-[var(--pg-bdr)] rounded-[10px] bg-[var(--pg-bg)] px-3 py-[7px] flex flex-col gap-[6px]">
                    <span className="text-[9.5px] font-bold text-[var(--pg-lbl)] uppercase tracking-[0.06em]">What needs to be done?</span>
                    <div className="flex flex-col gap-[5px]">
                        {["Weekly Assignments","Quizzes & Tests","Discussion Posts","Final Exam","Everything"].map(item => (
                            <label key={item} className="flex items-center gap-[6px] cursor-pointer">
                                <input type="checkbox" defaultChecked={item === "Everything"}
                                    className="accent-[#f16700] w-[14px] h-[14px] cursor-pointer shrink-0 outline-none"/>
                                <span className="text-[12.5px] text-[var(--opt-txt)] select-none">{item}</span>
                            </label>
                        ))}
                    </div>
                </div>
            </div>
            <div className="flex-1 min-w-0 flex flex-col gap-2"><DescField {...p}/></div>
        </div>
    </>
);

// ─── Main component ───────────────────────────────────────────────────────────
export default function CreativeHero() {
    const isDark = useDarkMode();

    const [serviceType, setServiceType] = useState<"Writing"|"Technical"|"Online Class">("Writing");
    const [email,        setEmail]       = useState("");
    const [countryCode,  setCountryCode] = useState("+1");
    const [phone,        setPhone]       = useState("");
    const [subject,      setSubject]     = useState("");
    const [description,  setDescription] = useState("");
    const [deadlineTime, setDeadlineTime]= useState("2:00 AM");
    const [pages,        setPages]       = useState(1);
    const [attachedFiles,setAttachedFiles] = useState<File[]>([]);
    const [acceptTerms,  setAcceptTerms] = useState(false);
    const [submitted,    setSubmitted]   = useState(false);
    const [submitting,   setSubmitting]  = useState(false);
    const [showDeadline, setShowDeadline]= useState(false);
    const [difficulty,   setDifficulty]  = useState("");
    const [classUrl,     setClassUrl]    = useState("");
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
    };

    const submitLabel = serviceType === "Writing"   ? "Get Writing Help Now →"
                      : serviceType === "Technical" ? "Get Technical Help Now →"
                      :                               "Get Class Help Now →";

    const cssVars = buildVars(isDark);

    return (
        <section
            className="ahusa-section relative flex items-start overflow-hidden py-24 max-lg:py-20 max-sm:py-[72px]"
            style={cssVars}>

            {/* dot grid */}
            <div className="ahusa-dot-grid absolute inset-0 z-0 pointer-events-none opacity-50"/>

            {/* radial ambient */}
            <div className="ahusa-radial absolute inset-0 z-[1] pointer-events-none"/>

            {/* content wrap */}
            <div className="relative z-[2] w-full max-w-[1260px] mx-auto px-8 max-lg:px-5 max-sm:px-3.5 flex items-start gap-11 max-lg:flex-col max-lg:gap-7 max-sm:gap-[22px] min-h-[calc(100vh-96px)] max-lg:min-h-0">

                {/* ── LEFT ── */}
                <motion.div className="flex-1 min-w-0 flex flex-col gap-5 pt-2 max-lg:items-center max-lg:text-center max-lg:pt-0 max-lg:gap-4"
                    initial={{ opacity:0, x:-28 }} animate={{ opacity:1, x:0 }} transition={{ duration:0.65 }}>

                    {/* live badge */}
                    <div className="inline-flex items-center gap-2 rounded-full px-4 py-[5px] text-[11.5px] font-bold tracking-[0.02em] backdrop-blur-[8px] w-fit shadow-sm bg-[var(--badge-bg)] border border-[var(--badge-bdr)] text-[var(--badge-clr)]">
                        <span className="ahusa-live-dot w-2 h-2 shrink-0 rounded-full bg-green-500"/>
                        USA-Based Experts • Live Now
                    </div>

                    {/* H1 */}
                    <h1 className="text-[clamp(22px,2.8vw,40px)] font-extrabold leading-tight tracking-tight m-0 break-words text-[var(--h1-clr)] max-sm:text-[clamp(22px,7.5vw,30px)] max-sm:leading-[1.22]">
                        AI-Free Assignment Help from{" "}
                        <span className="text-[#f16700]">Real Experts</span>{" "}
                        to Do My Assignment
                    </h1>

                    {/* subtext */}
                    <p className="text-[15px] leading-relaxed m-0 text-[var(--sub-clr)] max-sm:text-[13.5px]">
                        Get expert help in <span className="text-[#f16700] font-bold">any subject</span>
                        {" "}— Delivered plagiarism-free before your deadline.
                    </p>

                    {/* stats */}
                    <div className="flex items-center gap-4 flex-wrap max-lg:justify-center max-sm:gap-[10px]">
                        {[
                            { num:"50K+", lbl:"Orders Completed" },
                            { num:"4.9★", lbl:"Average Rating" },
                            { num:"500+", lbl:"PhD Experts" },
                        ].map((s, i) => (
                            <React.Fragment key={i}>
                                {i > 0 && <div className="w-px h-9 shrink-0 bg-[var(--stat-div)] max-lg:hidden"/>}
                                <div className="flex flex-col items-center gap-px">
                                    <span className="text-[20px] font-extrabold tracking-tight text-[var(--stat-num)] max-sm:text-[18px]">{s.num}</span>
                                    <span className="text-[11px] font-medium whitespace-nowrap text-[var(--stat-lbl)]">{s.lbl}</span>
                                </div>
                            </React.Fragment>
                        ))}
                    </div>

                    {/* feature list */}
                    <ul className="list-none m-0 p-0 flex flex-col gap-[9px] max-lg:items-start max-lg:text-left max-lg:w-full max-lg:max-w-[480px]">
                        {["Guaranteed Grade or Refund","100% AI-Free Content","24/7 Live Support","Free Turnitin Report","On-Time Delivery Promise"].map(f => (
                            <li key={f} className="flex items-center gap-[10px] text-[13.5px] font-medium text-[var(--feat-clr)]">
                                <span className="w-5 h-5 shrink-0 rounded-full bg-[#f16700] flex items-center justify-center text-white text-[11px] font-extrabold">✓</span>
                                {f}
                            </li>
                        ))}
                    </ul>

                    {/* university tags */}
                    <div className="flex flex-col gap-2">
                        <span className="text-[10.5px] font-semibold uppercase tracking-[0.06em] text-[var(--unis-lbl)]">Trusted by students at:</span>
                        <div className="flex flex-wrap gap-[6px]">
                            {["Harvard","MIT","Stanford","Oxford","Yale"].map(u => (
                                <span key={u} className="rounded-[6px] px-[10px] py-1 text-[11.5px] font-bold bg-[var(--uni-bg)] border border-[var(--uni-bdr)] text-[var(--uni-clr)]">{u}</span>
                            ))}
                        </div>
                    </div>
                </motion.div>

                {/* ── RIGHT: CARD ── */}
                <motion.div className="w-full lg:w-[480px] lg:flex-none"
                    initial={{ opacity:0, y:28 }} animate={{ opacity:1, y:0 }} transition={{ duration:0.6, delay:0.18 }}>

                    <div className="ahusa-card-shimmer rounded-[20px] p-[22px] max-sm:p-[14px] max-sm:rounded-2xl relative overflow-hidden bg-[var(--ahusa-card-bg)] border border-[var(--ahusa-card-bdr)] shadow-[var(--ahusa-card-shadow)] transition-[background,box-shadow] duration-300">

                        {!submitted ? (
                            <form onSubmit={handleSubmit} className="flex flex-col gap-[11px] max-sm:gap-[9px]" noValidate>

                                {/* form header */}
                                <div className="flex flex-col gap-2">
                                    <h2 className="text-[16px] max-sm:text-[15px] font-extrabold leading-[1.35] m-0 text-center max-lg:text-left text-[var(--title-clr)] break-words">
                                        AI-Free Assignment Help from Real Experts to Do My Assignment
                                    </h2>
                                    <div className="flex items-center justify-center max-lg:justify-start gap-[10px] flex-wrap">
                                        {["Guaranteed Grade or Refund","No AI","24/7 Support"].map(txt => (
                                            <span key={txt} className="flex items-center gap-[3px] text-[11px] font-semibold text-[var(--trust-clr)]">
                                                <span className="text-green-500 font-extrabold mr-0.5">✓</span>
                                                {txt}
                                            </span>
                                        ))}
                                    </div>
                                </div>

                                {/* service type radios */}
                                <div className="flex items-center flex-wrap gap-3 max-sm:gap-2 border-t border-b border-t-[var(--svc-bdr)] border-b-[var(--svc-bdr)] py-2 max-sm:py-[7px]">
                                    {(["Writing","Technical","Online Class"] as const).map(type => (
                                        <label key={type}
                                            className={`flex items-center gap-[6px] cursor-pointer text-[13px] max-sm:text-[12.5px] font-semibold select-none transition-colors duration-150 ${serviceType === type ? "text-[#f16700]" : "text-[var(--svc-clr)]"}`}
                                            onClick={() => switchService(type)}>
                                            <span className={`w-[17px] h-[17px] rounded-full shrink-0 inline-flex items-center justify-center border-2 transition-[border-color] duration-150 ${serviceType === type ? "border-[#f16700]" : "border-[var(--ring-bdr)]"}`}>
                                                {serviceType === type && <span className="w-[7px] h-[7px] rounded-full bg-[#f16700]"/>}
                                            </span>
                                            <input type="radio" name="svc" value={type}
                                                checked={serviceType === type}
                                                onChange={() => switchService(type)}
                                                className="absolute opacity-0 w-0 h-0 pointer-events-none"/>
                                            {type}
                                            <InfoTooltip text={tooltips[type]}/>
                                        </label>
                                    ))}
                                </div>

                                {/* animated fields */}
                                <AnimatePresence mode="wait">
                                    <motion.div key={serviceType}
                                        initial={{ opacity:0, y:7 }} animate={{ opacity:1, y:0 }}
                                        exit={{ opacity:0, y:-7 }} transition={{ duration:0.18 }}
                                        className="flex flex-col gap-2">
                                        {serviceType === "Writing"      && <WritingFields {...shared}/>}
                                        {serviceType === "Technical"    && <TechnicalFields {...shared} difficulty={difficulty} setDifficulty={setDifficulty}/>}
                                        {serviceType === "Online Class" && <OnlineClassFields {...shared} classUrl={classUrl} setClassUrl={setClassUrl} classDuration={classDuration} setClassDuration={setClassDuration}/>}
                                    </motion.div>
                                </AnimatePresence>

                                <input ref={fileInputRef} type="file" multiple onChange={handleFileChange}
                                    className="absolute opacity-0 w-0 h-0 pointer-events-none"/>

                                {/* T&C */}
                                <label className="flex items-start gap-2 cursor-pointer text-[11.5px] font-medium leading-[1.45] select-none text-[var(--terms-clr)]"
                                    onClick={() => setAcceptTerms(x => !x)}>
                                    <span className={`w-[18px] h-[18px] rounded-[4px] shrink-0 mt-px flex items-center justify-center cursor-pointer transition-[background,border-color] duration-150 border-2 ${acceptTerms ? "bg-[#f16700] border-[#f16700]" : "bg-[var(--ahusa-card-bg)] border-[var(--chk-bdr)]"}`}>
                                        {acceptTerms && (
                                            <svg width="11" height="9" viewBox="0 0 11 9" fill="none">
                                                <path d="M1 4.5L4 7.5L10 1" stroke="white" strokeWidth="2.2" strokeLinecap="round" strokeLinejoin="round"/>
                                            </svg>
                                        )}
                                    </span>
                                    I accept the T&amp;C, agree to receive offers &amp; updates
                                </label>

                                {/* submit */}
                                <button type="submit"
                                    disabled={!acceptTerms || !email || submitting}
                                    className="w-full py-[13px] px-5 bg-gradient-to-br from-[#f16700] to-[#ff8c00] text-white text-[14px] max-sm:text-[13.5px] font-extrabold rounded-xl cursor-pointer tracking-[0.02em] border-0 transition-[transform,box-shadow,opacity] duration-200 shadow-[0_4px_20px_rgba(241,103,0,0.32)] outline-none disabled:opacity-55 disabled:cursor-not-allowed disabled:!transform-none hover:enabled:-translate-y-0.5 hover:enabled:shadow-[0_8px_26px_rgba(241,103,0,0.44)]">
                                    {submitting ? (
                                        <span className="flex items-center justify-center gap-[7px]">
                                            <svg className="ahusa-spin" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="white" strokeWidth="2.5">
                                                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                                            </svg>
                                            Submitting...
                                        </span>
                                    ) : submitLabel}
                                </button>

                            </form>
                        ) : (
                            <motion.div className="flex flex-col items-center py-10 px-[18px] gap-[14px] rounded-2xl bg-[var(--ahusa-card-bg)]"
                                initial={{ scale:0.9, opacity:0 }} animate={{ scale:1, opacity:1 }}>
                                <div className="w-[68px] h-[68px] rounded-full bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center text-[28px] text-white font-extrabold shadow-[0_8px_22px_rgba(34,197,94,0.28)]">✓</div>
                                <h3 className="text-[20px] font-extrabold m-0 text-[var(--success-title)]">Request Received!</h3>
                                <p className="text-[13.5px] text-[var(--success-sub)] leading-relaxed m-0 max-w-[300px] text-center">
                                    We've received your <strong className="text-[var(--success-title)]">{serviceType}</strong> request.
                                    An expert will contact you at <strong className="text-[var(--success-title)]">{email}</strong> within minutes.
                                </p>
                                <button onClick={resetForm}
                                    className="mt-[6px] px-[22px] py-2 rounded-[10px] text-[13px] font-bold cursor-pointer outline-none transition-all duration-[180ms] border-[1.5px] text-[var(--reset-clr)] bg-[var(--reset-bg)] border-[var(--reset-bdr)] hover:!border-[#f16700] hover:!text-[#f16700]">
                                    Submit Another Request
                                </button>
                            </motion.div>
                        )}
                    </div>
                </motion.div>
            </div>

            {/* ─── MINIMAL <style> — only what Tailwind cannot do ─── */}
            <style>{`
                /* 1. Kill Tailwind Forms ring on all form elements inside hero */
                .ahusa-section input, .ahusa-section select, .ahusa-section textarea {
                    --tw-ring-shadow: 0 0 #0000 !important;
                    --tw-ring-color: transparent !important;
                    font-family: inherit;
                }
                .ahusa-section button { font-family: inherit; }

                /* 2. Dot grid — background-image references CSS var */
                .ahusa-dot-grid {
                    background-image: radial-gradient(var(--ahusa-dot) 1px, transparent 1px);
                    background-size: 24px 24px;
                }

                /* 3. Radial ambient — multi-gradient with CSS vars */
                .ahusa-radial {
                    background:
                        radial-gradient(ellipse 60% 50% at 8%  55%, var(--ahusa-glow1) 0%, transparent 70%),
                        radial-gradient(ellipse 50% 40% at 92% 18%, var(--ahusa-glow2) 0%, transparent 70%);
                }

                /* 4. Card shimmer bar — ::before pseudo-element */
                .ahusa-card-shimmer::before {
                    content: '';
                    position: absolute; top: 0; left: 0; right: 0; height: 4px;
                    background: linear-gradient(90deg, #f16700, #ff9a00, #f16700);
                    background-size: 200% 100%;
                    animation: ahusaShimmer 3s linear infinite;
                }

                /* 5. @keyframes */
                @keyframes ahusaShimmer { 0%{background-position:0% 0%} 100%{background-position:200% 0%} }
                @keyframes ahusaPulse {
                    0%,100% { box-shadow: 0 0 0 0   rgba(34,197,94,0.35); }
                    50%     { box-shadow: 0 0 0 5px rgba(34,197,94,0); }
                }
                @keyframes ahusaSpin { to { transform: rotate(360deg); } }

                /* 6. Named animations */
                .ahusa-live-dot { animation: ahusaPulse 2s infinite; }
                .ahusa-spin     { animation: ahusaSpin 0.85s linear infinite; }
            `}</style>
        </section>
    );
}
