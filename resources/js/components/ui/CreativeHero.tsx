"use client";

import React, { useState, useRef } from "react";
import { motion, AnimatePresence } from "framer-motion";

// ─── Config ─────────────────────────────────────────────────────────────────
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

// ─── Sub-components ──────────────────────────────────────────────────────────
const TrustBadge = ({ text, icon }: { text: string; icon: string }) => (
    <span className="mah-trust-badge">
        <span className="mah-trust-icon">{icon}</span>
        {text}
    </span>
);

const InfoTooltip = ({ text }: { text: string }) => {
    const [show, setShow] = useState(false);
    return (
        <span className="mah-info-icon" onMouseEnter={() => setShow(true)} onMouseLeave={() => setShow(false)}>
            <svg width="14" height="14" viewBox="0 0 20 20" fill="none">
                <circle cx="10" cy="10" r="9" stroke="#aaa" strokeWidth="1.5" />
                <text x="10" y="15" textAnchor="middle" fontSize="12" fill="#aaa" fontFamily="sans-serif">i</text>
            </svg>
            {show && <span className="mah-tooltip">{text}</span>}
        </span>
    );
};

// Phone field — shared across all service types
const PhoneField = ({
    countryCode, setCountryCode, phone, setPhone,
}: {
    countryCode: string; setCountryCode: (v: string) => void;
    phone: string; setPhone: (v: string) => void;
}) => (
    <div className="mah-phone-field">
        <select value={countryCode} onChange={e => setCountryCode(e.target.value)} className="mah-phone-code-select">
            {countryCodes.map(c => (
                <option key={c.code} value={c.code}>{c.flag} {c.code}</option>
            ))}
        </select>
        <div className="mah-phone-divider" />
        <input
            type="tel"
            placeholder="Phone no."
            value={phone}
            onChange={e => setPhone(e.target.value)}
            className="mah-phone-input"
        />
    </div>
);

// Deadline picker — shared
const DeadlinePicker = ({
    deadlineTime, setDeadlineTime, show, setShow,
}: {
    deadlineTime: string; setDeadlineTime: (v: string) => void;
    show: boolean; setShow: (v: boolean) => void;
}) => (
    <div className="mah-deadline-wrapper">
        <div className="mah-deadline-box" onClick={() => setShow(!show)}>
            <span className="mah-deadline-label">Deadline</span>
            <button type="button" className="mah-deadline-select">
                <span>{deadlineTime}</span>
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
                    <path d="M5 7.5L10 12.5L15 7.5" stroke="#555" strokeWidth="1.6" strokeLinecap="round" strokeLinejoin="round" />
                </svg>
            </button>
        </div>
        {show && (
            <div className="mah-deadline-dropdown">
                {deadlineTimes.map(t => (
                    <button
                        key={t} type="button"
                        className={`mah-deadline-option ${t === deadlineTime ? "mah-deadline-option-active" : ""}`}
                        onClick={() => { setDeadlineTime(t); setShow(false); }}
                    >{t}</button>
                ))}
            </div>
        )}
    </div>
);

// Pages counter — shared
const PagesCounter = ({ pages, setPages }: { pages: number; setPages: (v: number) => void }) => (
    <div className="mah-pages-wrapper">
        <span className="mah-pages-label">Pages</span>
        <div className="mah-pages-counter">
            <button type="button" onClick={() => setPages(Math.max(1, pages - 1))} className="mah-pages-btn">−</button>
            <span className="mah-pages-count">{pages}</span>
            <button type="button" onClick={() => setPages(pages + 1)} className="mah-pages-btn">+</button>
            <span className="mah-pages-words">{pages * 250} words</span>
        </div>
    </div>
);

// Description + Attach — shared
const DescriptionAttach = ({
    description, setDescription, attachedFiles, onAttach, fileInputRef,
}: {
    description: string; setDescription: (v: string) => void;
    attachedFiles: File[]; onAttach: () => void;
    fileInputRef: React.RefObject<HTMLInputElement>;
}) => (
    <div className="mah-desc-box">
        <textarea
            placeholder="Description (Write/Attach)"
            value={description}
            onChange={e => setDescription(e.target.value)}
            className="mah-textarea"
            rows={5}
        />
        <div className="mah-attach-row">
            <button type="button" onClick={onAttach} className="mah-attach-btn">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                    <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48" />
                </svg>
                Attach file
            </button>
            {attachedFiles.length > 0 && (
                <span className="mah-files-count">{attachedFiles.length} file(s)</span>
            )}
        </div>
    </div>
);

// ─── Field sets per service type ─────────────────────────────────────────────

/** WRITING fields */
const WritingFields = ({
    email, setEmail, countryCode, setCountryCode, phone, setPhone,
    subject, setSubject, description, setDescription,
    deadlineTime, setDeadlineTime, showDeadline, setShowDeadline,
    pages, setPages, attachedFiles, onAttach, fileInputRef,
}: any) => (
    <>
        {/* Row 1: Email + Phone */}
        <div className="mah-field-row">
            <div className="mah-field mah-field-half">
                <input type="email" required placeholder="Email" value={email}
                    onChange={e => setEmail(e.target.value)} className="mah-input" />
            </div>
            <div className="mah-field mah-field-half">
                <PhoneField countryCode={countryCode} setCountryCode={setCountryCode} phone={phone} setPhone={setPhone} />
            </div>
        </div>

        {/* Row 2: Subject + Description */}
        <div className="mah-field-row mah-field-row-describe">
            <div className="mah-field-left-half">
                <select value={subject} onChange={e => setSubject(e.target.value)} className="mah-input mah-select">
                    <option value="">Subject/Course Code</option>
                    {writingSubjects.map(s => <option key={s} value={s}>{s}</option>)}
                </select>

                <DeadlinePicker deadlineTime={deadlineTime} setDeadlineTime={setDeadlineTime}
                    show={showDeadline} setShow={setShowDeadline} />

                <PagesCounter pages={pages} setPages={setPages} />
            </div>

            <div className="mah-field-right-half">
                <DescriptionAttach description={description} setDescription={setDescription}
                    attachedFiles={attachedFiles} onAttach={onAttach} fileInputRef={fileInputRef} />
            </div>
        </div>
    </>
);

/** TECHNICAL fields */
const TechnicalFields = ({
    email, setEmail, countryCode, setCountryCode, phone, setPhone,
    subject, setSubject, description, setDescription,
    deadlineTime, setDeadlineTime, showDeadline, setShowDeadline,
    attachedFiles, onAttach, fileInputRef, difficulty, setDifficulty,
}: any) => (
    <>
        {/* Row 1: Email + Phone */}
        <div className="mah-field-row">
            <div className="mah-field mah-field-half">
                <input type="email" required placeholder="Email" value={email}
                    onChange={e => setEmail(e.target.value)} className="mah-input" />
            </div>
            <div className="mah-field mah-field-half">
                <PhoneField countryCode={countryCode} setCountryCode={setCountryCode} phone={phone} setPhone={setPhone} />
            </div>
        </div>

        {/* Row 2: Subject + Difficulty */}
        <div className="mah-field-row">
            <div className="mah-field mah-field-half">
                <select value={subject} onChange={e => setSubject(e.target.value)} className="mah-input mah-select">
                    <option value="">Select Technology/Subject</option>
                    {technicalSubjects.map(s => <option key={s} value={s}>{s}</option>)}
                </select>
            </div>
            <div className="mah-field mah-field-half">
                <select value={difficulty} onChange={e => setDifficulty(e.target.value)} className="mah-input mah-select">
                    <option value="">Difficulty Level</option>
                    <option value="Beginner">Beginner / Undergraduate</option>
                    <option value="Intermediate">Intermediate / Graduate</option>
                    <option value="Advanced">Advanced / PhD Level</option>
                </select>
            </div>
        </div>

        {/* Row 3: Deadline + Description */}
        <div className="mah-field-row mah-field-row-describe">
            <div className="mah-field-left-half">
                <DeadlinePicker deadlineTime={deadlineTime} setDeadlineTime={setDeadlineTime}
                    show={showDeadline} setShow={setShowDeadline} />

                {/* Delivery format selector */}
                <div className="mah-pages-wrapper">
                    <span className="mah-pages-label">Delivery Format</span>
                    <div className="mah-delivery-options">
                        {["Code Only", "Code + Report", "Code + Explanation"].map(opt => (
                            <label key={opt} className="mah-delivery-option">
                                <input
                                    type="radio"
                                    name="deliveryFormat"
                                    value={opt}
                                    defaultChecked={opt === "Code Only"}
                                    className="mah-radio-input"
                                />
                                <span className="mah-delivery-label">{opt}</span>
                            </label>
                        ))}
                    </div>
                </div>
            </div>

            <div className="mah-field-right-half">
                <DescriptionAttach description={description} setDescription={setDescription}
                    attachedFiles={attachedFiles} onAttach={onAttach} fileInputRef={fileInputRef} />
            </div>
        </div>
    </>
);

/** ONLINE CLASS fields */
const OnlineClassFields = ({
    email, setEmail, countryCode, setCountryCode, phone, setPhone,
    subject, setSubject, description, setDescription,
    attachedFiles, onAttach, fileInputRef, classUrl, setClassUrl,
    classDuration, setClassDuration,
}: any) => (
    <>
        {/* Row 1: Email + Phone */}
        <div className="mah-field-row">
            <div className="mah-field mah-field-half">
                <input type="email" required placeholder="Email" value={email}
                    onChange={e => setEmail(e.target.value)} className="mah-input" />
            </div>
            <div className="mah-field mah-field-half">
                <PhoneField countryCode={countryCode} setCountryCode={setCountryCode} phone={phone} setPhone={setPhone} />
            </div>
        </div>

        {/* Row 2: Course subject + Duration */}
        <div className="mah-field-row">
            <div className="mah-field mah-field-half">
                <select value={subject} onChange={e => setSubject(e.target.value)} className="mah-input mah-select">
                    <option value="">Course/Subject Name</option>
                    {onlineClassSubjects.map(s => <option key={s} value={s}>{s}</option>)}
                </select>
            </div>
            <div className="mah-field mah-field-half">
                <select value={classDuration} onChange={e => setClassDuration(e.target.value)} className="mah-input mah-select">
                    <option value="">Class Duration</option>
                    <option value="1 Week">1 Week</option>
                    <option value="2 Weeks">2 Weeks</option>
                    <option value="1 Month">1 Month</option>
                    <option value="2 Months">2 Months</option>
                    <option value="Full Semester">Full Semester</option>
                    <option value="Full Year">Full Year</option>
                </select>
            </div>
        </div>

        {/* Row 3: Login URL + What's needed */}
        <div className="mah-field-row mah-field-row-describe">
            <div className="mah-field-left-half">
                <input
                    type="url"
                    placeholder="Course Platform URL (optional)"
                    value={classUrl}
                    onChange={e => setClassUrl(e.target.value)}
                    className="mah-input"
                />

                {/* What needs to be done */}
                <div className="mah-pages-wrapper">
                    <span className="mah-pages-label">What needs to be done?</span>
                    <div className="mah-checklist">
                        {[
                            "Weekly Assignments",
                            "Quizzes & Tests",
                            "Discussion Posts",
                            "Final Exam",
                            "Everything",
                        ].map(item => (
                            <label key={item} className="mah-checklist-item">
                                <input type="checkbox" className="mah-check-input" defaultChecked={item === "Everything"} />
                                <span>{item}</span>
                            </label>
                        ))}
                    </div>
                </div>
            </div>

            <div className="mah-field-right-half">
                <DescriptionAttach description={description} setDescription={setDescription}
                    attachedFiles={attachedFiles} onAttach={onAttach} fileInputRef={fileInputRef} />
            </div>
        </div>
    </>
);

// ─── Main Component ───────────────────────────────────────────────────────────
export default function CreativeHero() {
    const [serviceType, setServiceType] = useState<"Writing" | "Technical" | "Online Class">("Writing");

    // Shared fields
    const [email, setEmail] = useState("");
    const [countryCode, setCountryCode] = useState("+1");
    const [phone, setPhone] = useState("");
    const [subject, setSubject] = useState("");
    const [description, setDescription] = useState("");
    const [deadlineTime, setDeadlineTime] = useState("2:00 AM");
    const [pages, setPages] = useState(1);
    const [attachedFiles, setAttachedFiles] = useState<File[]>([]);
    const [acceptTerms, setAcceptTerms] = useState(false);
    const [submitted, setSubmitted] = useState(false);
    const [submitting, setSubmitting] = useState(false);
    const [showDeadline, setShowDeadline] = useState(false);

    // Technical-only fields
    const [difficulty, setDifficulty] = useState("");

    // Online Class-only fields
    const [classUrl, setClassUrl] = useState("");
    const [classDuration, setClassDuration] = useState("");

    const fileInputRef = useRef<HTMLInputElement>(null);

    const handleServiceChange = (type: "Writing" | "Technical" | "Online Class") => {
        setServiceType(type);
        setSubject("");       // reset subject when switching
        setDescription("");
        setShowDeadline(false);
    };

    const handleFileChange = (e: React.ChangeEvent<HTMLInputElement>) => {
        if (e.target.files) {
            setAttachedFiles(prev => [...prev, ...Array.from(e.target.files!)]);
        }
    };

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        if (!acceptTerms || !email) return;
        setSubmitting(true);
        setTimeout(() => {
            setSubmitting(false);
            setSubmitted(true);
        }, 1800);
    };

    const resetForm = () => {
        setSubmitted(false);
        setEmail(""); setPhone(""); setSubject(""); setDescription("");
        setAcceptTerms(false); setAttachedFiles([]); setDifficulty("");
        setClassUrl(""); setClassDuration(""); setPages(1);
    };

    const fieldProps = {
        email, setEmail, countryCode, setCountryCode, phone, setPhone,
        subject, setSubject, description, setDescription,
        deadlineTime, setDeadlineTime, showDeadline, setShowDeadline,
        pages, setPages, attachedFiles,
        onAttach: () => fileInputRef.current?.click(),
        fileInputRef,
    };

    return (
        <section className="mah-hero-section">
            <div className="mah-hero-bg" />

            <div className="mah-hero-container">
                {/* ── LEFT COLUMN ── */}
                <motion.div
                    className="mah-left-col"
                    initial={{ opacity: 0, x: -30 }}
                    animate={{ opacity: 1, x: 0 }}
                    transition={{ duration: 0.7 }}
                >
                    <div className="mah-live-badge">
                        <span className="mah-live-dot" />
                        <span>USA-Based Experts • Live Now</span>
                    </div>

                    <h1 className="mah-hero-h1">
                        AI-Free Assignment Help from{" "}
                        <span className="mah-h1-highlight">Real Experts</span> to Do My Assignment
                    </h1>

                    <p className="mah-hero-subtext">
                        Get expert help in{" "}
                        <span className="mah-subtext-highlight">any subject</span>
                        {" "}— Delivered plagiarism-free before your deadline.
                    </p>

                    <div className="mah-stats-row">
                        <div className="mah-stat">
                            <span className="mah-stat-num">50K+</span>
                            <span className="mah-stat-label">Orders Completed</span>
                        </div>
                        <div className="mah-stat-divider" />
                        <div className="mah-stat">
                            <span className="mah-stat-num">4.9★</span>
                            <span className="mah-stat-label">Average Rating</span>
                        </div>
                        <div className="mah-stat-divider" />
                        <div className="mah-stat">
                            <span className="mah-stat-num">500+</span>
                            <span className="mah-stat-label">PhD Experts</span>
                        </div>
                    </div>

                    <ul className="mah-feature-list">
                        {[
                            "Guaranteed Grade or Refund",
                            "100% AI-Free Content",
                            "24/7 Live Support",
                            "Free Turnitin Report",
                            "On-Time Delivery Promise",
                        ].map(item => (
                            <li key={item} className="mah-feature-item">
                                <span className="mah-check-icon">✓</span>
                                {item}
                            </li>
                        ))}
                    </ul>

                    <div className="mah-universities">
                        <span className="mah-uni-label">Trusted by students at:</span>
                        <div className="mah-uni-logos">
                            {["Harvard", "MIT", "Stanford", "Oxford", "Yale"].map(u => (
                                <span key={u} className="mah-uni-tag">{u}</span>
                            ))}
                        </div>
                    </div>
                </motion.div>

                {/* ── RIGHT COLUMN — ORDER FORM ── */}
                <motion.div
                    className="mah-right-col"
                    initial={{ opacity: 0, y: 30 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ duration: 0.6, delay: 0.2 }}
                >
                    <div className="mah-form-card">
                        {!submitted ? (
                            <form onSubmit={handleSubmit} className="mah-form">

                                {/* Card header */}
                                <div className="mah-form-header">
                                    <h2 className="mah-form-title">
                                        AI-Free Assignment Help from Real Experts to Do My Assignment
                                    </h2>
                                    <div className="mah-trust-row">
                                        <TrustBadge icon="✓" text="Guaranteed Grade or Refund" />
                                        <TrustBadge icon="✓" text="No AI" />
                                        <TrustBadge icon="✓" text="24/7 Support" />
                                    </div>
                                </div>

                                {/* Service Type Radio — clicking changes the fields below */}
                                <div className="mah-service-row">
                                    {(["Writing", "Technical", "Online Class"] as const).map(type => (
                                        <label
                                            key={type}
                                            className={`mah-service-radio ${serviceType === type ? "mah-service-radio-active" : ""}`}
                                            onClick={() => handleServiceChange(type)}
                                        >
                                            <input
                                                type="radio"
                                                name="serviceType"
                                                value={type}
                                                checked={serviceType === type}
                                                onChange={() => handleServiceChange(type)}
                                                className="mah-radio-input"
                                            />
                                            <span className={`mah-radio-dot ${serviceType === type ? "mah-radio-checked" : ""}`} />
                                            <span className="mah-radio-label">{type}</span>
                                            <InfoTooltip text={tooltips[type]} />
                                        </label>
                                    ))}
                                </div>

                                {/* ── Dynamic fields by service type ── */}
                                <AnimatePresence mode="wait">
                                    <motion.div
                                        key={serviceType}
                                        initial={{ opacity: 0, y: 10 }}
                                        animate={{ opacity: 1, y: 0 }}
                                        exit={{ opacity: 0, y: -10 }}
                                        transition={{ duration: 0.22 }}
                                        className="mah-fields-block"
                                    >
                                        {serviceType === "Writing" && (
                                            <WritingFields {...fieldProps} />
                                        )}
                                        {serviceType === "Technical" && (
                                            <TechnicalFields
                                                {...fieldProps}
                                                difficulty={difficulty}
                                                setDifficulty={setDifficulty}
                                            />
                                        )}
                                        {serviceType === "Online Class" && (
                                            <OnlineClassFields
                                                {...fieldProps}
                                                classUrl={classUrl}
                                                setClassUrl={setClassUrl}
                                                classDuration={classDuration}
                                                setClassDuration={setClassDuration}
                                            />
                                        )}
                                    </motion.div>
                                </AnimatePresence>

                                {/* Hidden file input */}
                                <input
                                    ref={fileInputRef}
                                    type="file"
                                    multiple
                                    onChange={handleFileChange}
                                    className="mah-file-input-hidden"
                                />

                                {/* T&C Checkbox */}
                                <label className="mah-terms-row">
                                    <div
                                        className={`mah-checkbox ${acceptTerms ? "mah-checkbox-checked" : ""}`}
                                        onClick={() => setAcceptTerms(v => !v)}
                                    >
                                        {acceptTerms && (
                                            <svg width="12" height="10" viewBox="0 0 12 10" fill="none">
                                                <path d="M1 5L4.5 8.5L11 1.5" stroke="white" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" />
                                            </svg>
                                        )}
                                    </div>
                                    <input type="checkbox" hidden checked={acceptTerms} onChange={() => setAcceptTerms(v => !v)} />
                                    <span className="mah-terms-text">
                                        I accept the T&C, agree to receive offers &amp; updates
                                    </span>
                                </label>

                                {/* Submit */}
                                <button
                                    type="submit"
                                    disabled={!acceptTerms || !email || submitting}
                                    className="mah-submit-btn"
                                >
                                    {submitting ? (
                                        <span className="mah-submitting">
                                            <svg className="mah-spinner" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" strokeWidth="2.5">
                                                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                                            </svg>
                                            Submitting Request...
                                        </span>
                                    ) : (
                                        serviceType === "Writing"      ? "Get Writing Help Now →" :
                                        serviceType === "Technical"    ? "Get Technical Help Now →" :
                                                                         "Get Class Help Now →"
                                    )}
                                </button>

                            </form>
                        ) : (
                            <motion.div
                                initial={{ scale: 0.9, opacity: 0 }}
                                animate={{ scale: 1, opacity: 1 }}
                                className="mah-success-card"
                            >
                                <div className="mah-success-icon">✓</div>
                                <h3 className="mah-success-title">Request Received!</h3>
                                <p className="mah-success-text">
                                    We've received your <strong>{serviceType}</strong> request. An expert will contact you at <strong>{email}</strong> within minutes.
                                </p>
                                <button type="button" onClick={resetForm} className="mah-reset-btn">
                                    Submit Another Request
                                </button>
                            </motion.div>
                        )}
                    </div>
                </motion.div>
            </div>

            {/* ─── Styles ─── */}
            <style>{`
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
            `}</style>
        </section>
    );
}
