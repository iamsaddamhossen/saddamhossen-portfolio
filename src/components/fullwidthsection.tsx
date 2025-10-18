"use client";
import React from "react";

interface FullWidthSectionProps {
  children: React.ReactNode;
  bgColor?: string;
}

export function FullWidthSection({
  children,
  bgColor = "bg-white",
}: FullWidthSectionProps) {
  return (
    <section
      className={`${bgColor} w-full py-20`}
      style={{
        marginLeft: "calc(50% - 50vw)",
        marginRight: "calc(50% - 50vw)",
      }}
    >
      <div className="max-w-[1200px] mx-auto px-6 md:px-10">{children}</div>
    </section>
  );
}
