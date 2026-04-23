"use client";

import React, { useState, useEffect } from "react";
import { motion, useScroll, useTransform, AnimatePresence } from "framer-motion";
import {
    Phone,
    ShieldCheck,
    Star,
    Users,
    GraduationCap,
    Clock,
    ChevronRight,
    ArrowRight
} from "lucide-react";
import { cn } from "@/lib/utils";

const FloatingCard = ({ delay, className, children }: { delay: number; className?: string; children: React.ReactNode }) => (
    <motion.div
        initial={{ opacity: 0, scale: 0.8, y: 20 }}
        animate={{ opacity: 1, scale: 1, y: 0 }}
        transition={{
            duration: 0.8,
            delay,
            ease: [0, 0.71, 0.2, 1.01]
        }}
    >
        <motion.div
            animate={{
                y: [0, -10, 0],
                rotate: [-1, 1, -1]
            }}
            transition={{
                duration: 5,
                repeat: Infinity,
                ease: "easeInOut"
            }}
            className={cn(
                "bg-white/80 backdrop-blur-xl border border-white/20 shadow-[0_8px_32px_0_rgba(31,38,135,0.07)] rounded-2xl p-4 flex items-center gap-3",
                className
            )}
        >
            {children}
        </motion.div>
    </motion.div>
);

export default function CreativeHero() {
    const { scrollY } = useScroll();
    const [textIndex, setTextIndex] = useState(0);

    const rotatingTexts = [
        "Expert Academic Support You Can Trust",
        "Top-Tier Assignment Writing Service",
        "Your Path to Academic Excellence",
    ];

    useEffect(() => {
        const interval = setInterval(() => {
            setTextIndex((prev) => (prev + 1) % rotatingTexts.length);
        }, 4000);
        return () => clearInterval(interval);
    }, []);

    return (
        <section className="relative min-h-screen flex items-center justify-center overflow-hidden bg-[#fafafa] py-28 sm:py-36">
            {/* Background Decorations */}
            <div className="absolute inset-0 z-0 pointer-events-none">
                <div className="absolute top-0 -left-1/4 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-blue-100/40 via-transparent to-transparent blur-3xl opacity-60" />
                <div className="absolute bottom-0 -right-1/4 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-purple-100/40 via-transparent to-transparent blur-3xl opacity-60" />

                {/* Animated Grid */}
                <div className="absolute inset-0 [background-image:linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] [background-size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] opacity-50" />
            </div>

            <div className="container relative z-10 px-6 mx-auto">
                <div className="flex flex-col items-center text-center max-w-5xl mx-auto">

                    {/* Badge */}
                    <motion.div
                        initial={{ opacity: 0, y: 20 }}
                        animate={{ opacity: 1, y: 0 }}
                        transition={{ duration: 0.6 }}
                        className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-50/50 border border-blue-100 mb-8 backdrop-blur-sm shadow-sm"
                    >
                        <span className="relative flex h-2 w-2">
                            <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span className="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        <span className="text-[10px] sm:text-xs font-black uppercase tracking-[0.2em] text-blue-700">
                            Elite Academic Support • USA Based
                        </span>
                    </motion.div>

                    {/* Main Title - Redesigned for Premium Impact */}
                    <div className="flex flex-col items-center mb-8 sm:mb-12">
                        <motion.h1
                            initial={{ opacity: 0, filter: "blur(10px)", y: 20 }}
                            animate={{ opacity: 1, filter: "blur(0px)", y: 0 }}
                            transition={{ duration: 0.8, delay: 0.2 }}
                            className="flex flex-col items-center"
                        >
                            <span className="text-blue-600 text-5xl sm:text-7xl lg:text-8xl xl:text-9xl font-black tracking-tightest leading-none relative inline-block mb-4 sm:mb-6">
                                Assignment Help USA
                                <svg className="absolute -bottom-2 sm:-bottom-4 left-0 w-full scale-110" viewBox="0 0 358 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <motion.path
                                        initial={{ pathLength: 0 }}
                                        animate={{ pathLength: 1 }}
                                        transition={{ duration: 1, delay: 1 }}
                                        d="M1 9.5C118.5 1.5 238.5 1.5 357 9.5"
                                        stroke="#2563EB"
                                        strokeWidth="4"
                                        strokeLinecap="round"
                                    />
                                </svg>
                            </span>
                            <div className="h-[90px] sm:h-[120px] lg:h-[140px] flex items-center justify-center w-full max-w-4xl">
                                <AnimatePresence mode="wait">
                                    <motion.span
                                        key={textIndex}
                                        initial={{ opacity: 0, y: 15, filter: "blur(4px)" }}
                                        animate={{ opacity: 1, y: 0, filter: "blur(0px)" }}
                                        exit={{ opacity: 0, y: -15, filter: "blur(4px)" }}
                                        transition={{ duration: 0.4 }}
                                        className="text-slate-900 text-2xl sm:text-4xl lg:text-5xl xl:text-6xl font-extrabold tracking-tight leading-tight text-balance text-center block w-full"
                                    >
                                        {rotatingTexts[textIndex]}
                                    </motion.span>
                                </AnimatePresence>
                            </div>
                        </motion.h1>
                    </div>

                    {/* Description - Refined Spacing */}
                    <motion.p
                        initial={{ opacity: 0, y: 20 }}
                        animate={{ opacity: 1, y: 0 }}
                        transition={{ duration: 0.6, delay: 0.4 }}
                        className="text-base sm:text-lg lg:text-xl text-slate-500 max-w-4xl mb-12 sm:mb-16 leading-relaxed font-medium px-6"
                    >
                        Struggling with tight deadlines, complex topics, or academic pressure? <strong>Assignment Help USA</strong> provides reliable, plagiarism-free, and affordable online academic assistance to students across the USA. Whether you’re an undergraduate, postgraduate, or PhD scholar, our subject-matter experts are here to help you succeed.
                    </motion.p>

                    {/* Buttons */}
                    <motion.div
                        initial={{ opacity: 0, y: 20 }}
                        animate={{ opacity: 1, y: 0 }}
                        transition={{ duration: 0.6, delay: 0.6 }}
                        className="flex flex-col sm:flex-row items-center gap-6 w-full sm:w-auto mb-32 px-4"
                    >
                        <button className="group relative w-full sm:w-auto px-10 py-5 sm:py-6 bg-blue-600 text-white font-black rounded-2xl overflow-hidden transition-all hover:bg-blue-700 hover:shadow-[0_20px_40px_rgba(37,99,235,0.25)] active:scale-95 shadow-xl shadow-blue-600/10">
                            <span className="relative z-10 flex items-center justify-center gap-3 text-xs sm:text-sm uppercase tracking-[0.2em]">
                                Get Expert Help Now
                                <ArrowRight className="w-5 h-5 transition-transform group-hover:translate-x-1" />
                            </span>
                            <div className="absolute inset-0 bg-gradient-to-r from-blue-400/0 via-white/20 to-blue-400/0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000" />

                            {/* Periodic Shimmer */}
                            <motion.div
                                animate={{
                                    x: ['-200%', '200%'],
                                }}
                                transition={{
                                    duration: 4,
                                    repeat: Infinity,
                                    repeatDelay: 6,
                                    ease: "easeInOut"
                                }}
                                className="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent skew-x-12 pointer-events-none"
                            />
                        </button>

                        <button className="w-full sm:w-auto px-10 py-5 sm:py-6 bg-white text-slate-900 font-black rounded-2xl border-2 border-slate-100 hover:border-blue-100 transition-all hover:bg-slate-50 active:scale-95 shadow-lg shadow-slate-200/50 text-xs sm:text-sm uppercase tracking-[0.2em] flex items-center justify-center gap-3">
                            View Services
                            <ChevronRight className="w-5 h-5 text-slate-400" />
                        </button>
                    </motion.div>

                    {/* Floating Trust Assets */}
                    <div className="absolute inset-0 pointer-events-none hidden lg:block">
                        <FloatingCard delay={0.8} className="absolute top-[12%] left-[5%] -rotate-6">
                            <div className="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center text-orange-600">
                                <GraduationCap className="w-6 h-6" />
                            </div>
                            <div className="text-left">
                                <p className="text-[10px] font-black uppercase tracking-widest text-slate-400 leading-none mb-1">Expertise</p>
                                <p className="text-xs font-bold text-slate-900 leading-none">PhD Tutors</p>
                            </div>
                        </FloatingCard>

                        <FloatingCard delay={1.0} className="absolute top-[42%] right-[5%] rotate-3">
                            <div className="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                                <ShieldCheck className="w-6 h-6" />
                            </div>
                            <div className="text-left">
                                <p className="text-[10px] font-black uppercase tracking-widest text-slate-400 leading-none mb-1">Security</p>
                                <p className="text-xs font-bold text-slate-900 leading-none">100% Privacy</p>
                            </div>
                        </FloatingCard>

                        <FloatingCard delay={1.2} className="absolute bottom-[20%] left-[8%] rotate-12">
                            <div className="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">
                                <Clock className="w-6 h-6" />
                            </div>
                            <div className="text-left">
                                <p className="text-[10px] font-black uppercase tracking-widest text-slate-400 leading-none mb-1">Availability</p>
                                <p className="text-xs font-bold text-slate-900 leading-none">24/7 Live Support</p>
                            </div>
                        </FloatingCard>

                        <FloatingCard delay={1.4} className="absolute top-[10%] right-[10%] -rotate-12">
                            <div className="flex -space-x-3">
                                {[1, 2, 3].map((i) => (
                                    <div key={i} className="w-8 h-8 rounded-full border-2 border-white bg-slate-200 overflow-hidden flex items-center justify-center shadow-sm">
                                        <Users className="w-4 h-4 text-slate-400" />
                                    </div>
                                ))}
                            </div>
                            <div className="text-left">
                                <div className="flex items-center gap-0.5 text-yellow-400">
                                    <Star className="w-2.5 h-2.5 fill-current" />
                                    <Star className="w-2.5 h-2.5 fill-current" />
                                    <Star className="w-2.5 h-2.5 fill-current" />
                                    <Star className="w-2.5 h-2.5 fill-current" />
                                    <Star className="w-2.5 h-2.5 fill-current" />
                                </div>
                                <p className="text-xs font-bold text-slate-900 leading-none mt-1">50k+ Happy Students</p>
                            </div>
                        </FloatingCard>
                    </div>

                </div>
            </div>



        </section >
    );
}
