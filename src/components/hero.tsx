"use client"; // ← This is required for useState and Calendly

import Image from "next/image";
import Link from "next/link";
import { useState } from "react";
import { InlineWidget } from "react-calendly";

export function Hero() {
  const [showCalendly, setShowCalendly] = useState(false);

  return (
    <>
      <section className="relative w-full min-h-[50vh] md:min-h-[65vh] flex items-center overflow-hidden">
        <Image
          src="/sh_hero.png"
          alt="Saddam Hossen WordPress Developer"
          fill
          className="object-cover object-top"
          priority
          quality={90}
        />

        <div className="absolute inset-0 bg-gradient-to-r from-[#0f4148]/95 via-[#0f4148]/70 to-[#0f4148]/0" />

        <div className="relative z-10 max-w-[1200px] mx-auto w-full px-6 md:px-10 flex items-center">
          <div className="w-full md:w-3/5 text-left text-white flex flex-col justify-center py-10 md:py-0">
            {/* Added py-10 for top/bottom spacing on mobile */}
            <h1 className="text-4xl md:text-5xl font-extrabold leading-tight drop-shadow-xl">
              Hi, I&apos;m <span className="text-white">Saddam Hossen</span>.
            </h1>

            <p className="mt-6 text-lg md:text-xl text-white/90 leading-relaxed max-w-[850px]">
              I have been building WordPress websites for 9+ years. I live and
              breathe WordPress.
            </p>

            <p className="mt-4 text-lg md:text-xl text-white/90 leading-relaxed max-w-[850px]">
              I specialize in fast, secure, and scalable custom solutions that
              are easy to manage.
            </p>

            <div className="mt-8 flex flex-wrap gap-4 pb-10 md:pb-0">
              {/* Added pb-10 for bottom spacing on mobile */}
              <button
                onClick={() => setShowCalendly(true)}
                className="inline-flex items-center gap-2 bg-gradient-to-r from-[#23A7BF] to-[#1F9EB2] text-white font-semibold px-6 py-3 shadow-lg hover:scale-105 transition-transform duration-300"
              >
                Let’s Talk
              </button>

              <Link
                href="/#portfolio"
                className="self-center text-white/80 underline-offset-4 hover:underline font-medium"
              >
                View Portfolio
              </Link>
            </div>
          </div>
        </div>
      </section>

      {showCalendly && (
        <div className="fixed inset-0 bg-black/60 flex items-center justify-center z-50">
          <div className="bg-white p-4 max-w-xl w-full relative rounded-lg shadow-xl">
            <button
              className="absolute top-2 right-2 text-gray-500 hover:text-gray-800 text-xl font-bold"
              onClick={() => setShowCalendly(false)}
            >
              ✕
            </button>

            <InlineWidget url="https://calendly.com/saddam-wp007" />
          </div>
        </div>
      )}
    </>
  );
}
